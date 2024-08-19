<?php
require('razorpay-php-master/Razorpay.php'); // Adjust path as necessary
use Razorpay\Api\Api;

$api = new Api('rzp_live_xU2eXjdttrjUQK', 'xxxxxxxxxxxxxxxxxxxxxxxx');

$input = json_decode(file_get_contents('php://input'), true);
$paymentId = $input['payment_id'];

try {
    $payment = $api->payment->fetch($paymentId);

    if ($payment->status == 'captured') {
        echo json_encode(['success' => true]);
    } else {
        echo json_encode(['success' => false]);
    }
} catch (Exception $e) {
    error_log($e->getMessage());
    echo json_encode(['success' => false, 'error' => $e->getMessage()]);
}
?>
