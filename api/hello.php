<?php
declare(strict_types=1);

header('Content-Type: application/json; charset=utf-8');

$name = $_GET['name'] ?? 'world';

echo json_encode([
  'ok' => true,
  'message' => "Hello, {$name}!",
  'timestamp' => gmdate('c'),
], JSON_UNESCAPED_SLASHES);
