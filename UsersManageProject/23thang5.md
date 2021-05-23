
sql thông thường  

$sql = "SELECT * FROM users WHERE email = '$email' AND status='$status'";

viết theo hướng chống sql injection
cách 1 : bind data vào ?
$sql = 'SELECT * FROM users WHERE email = ? AND status=?';
$stmt = $pdo->prepare('SELECT * FROM users WHERE email = ? AND status=?');
// bind dữ liệu vào các dấu ? của câu sql
$stmt->execute([$email, $status]);
$user = $stmt->fetch();
// cách 2 : bind data theo name
$stmt = $pdo->prepare('SELECT * FROM users WHERE email = :email AND status=:status');
$stmt->execute(['email' => $email, 'status' => $status]);
$email gán cho key là email => truyền giá trị vào trong :email
$status gán cho key là status => truyền giá trị vào trong :status
$user = $stmt->fetch();

tham khảo thêm tại : https://phpdelusions.net/pdo#dml
