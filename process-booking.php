<?php



header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');


if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Method not allowed']);
    exit;
}

require_once 'includes/db.php';


function clean($val) {
    return htmlspecialchars(strip_tags(trim($val)), ENT_QUOTES, 'UTF-8');
}

$first_name  = clean($_POST['first_name']  ?? '');
$last_name   = clean($_POST['last_name']   ?? '');
$email       = filter_var(trim($_POST['email'] ?? ''), FILTER_SANITIZE_EMAIL);
$phone       = clean($_POST['phone']       ?? '');
$age_group   = clean($_POST['age_group']   ?? '');
$treatments  = clean($_POST['treatments']  ?? '');
$message     = clean($_POST['message']     ?? '');
$pref_date   = clean($_POST['pref_date']   ?? '');
$pref_time   = clean($_POST['pref_time']   ?? '');
$source      = clean($_POST['source']      ?? '');


if (empty($first_name) || empty($phone)) {
    echo json_encode(['success' => false, 'message' => 'Name and phone are required']);
    exit;
}


if ($pdo) {
    try {
        
        $pdo->exec("CREATE TABLE IF NOT EXISTS bookings (
            id          INT AUTO_INCREMENT PRIMARY KEY,
            first_name  VARCHAR(100) NOT NULL,
            last_name   VARCHAR(100),
            email       VARCHAR(200),
            phone       VARCHAR(30) NOT NULL,
            age_group   VARCHAR(20),
            treatments  VARCHAR(500),
            message     TEXT,
            pref_date   DATE,
            pref_time   VARCHAR(50),
            source      VARCHAR(100),
            status      ENUM('new','contacted','booked','cancelled') DEFAULT 'new',
            created_at  DATETIME DEFAULT CURRENT_TIMESTAMP
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4");

        $stmt = $pdo->prepare("INSERT INTO bookings 
            (first_name, last_name, email, phone, age_group, treatments, message, pref_date, pref_time, source)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

        $pref_date_val = !empty($pref_date) ? $pref_date : null;

        $stmt->execute([
            $first_name, $last_name, $email, $phone,
            $age_group, $treatments, $message,
            $pref_date_val, $pref_time, $source
        ]);

        echo json_encode(['success' => true, 'message' => 'Booking saved successfully', 'id' => $pdo->lastInsertId()]);
    } catch (PDOException $e) {
        error_log("Booking insert failed: " . $e->getMessage());
        
        echo json_encode(['success' => true, 'message' => 'Booking received']);
    }
} else {
    
    $log = date('Y-m-d H:i:s') . " | {$first_name} {$last_name} | {$phone} | {$email} | {$treatments} | {$pref_date} {$pref_time}\n";
    file_put_contents(__DIR__ . '/bookings_fallback.log', $log, FILE_APPEND | LOCK_EX);
    echo json_encode(['success' => true, 'message' => 'Booking received']);
}

