<?php
$pdo = new PDO('mysql:host=db;dbname=db', 'db', 'db');

echo "=== CAMPAIGN 1 DETAILS ===\n";
$stmt = $pdo->query("SELECT id, name, is_published, publish_up, publish_down FROM campaigns WHERE id = 1");
print_r($stmt->fetchAll(PDO::FETCH_ASSOC));

echo "=== CAMPAIGN 1 LEAD LISTS (SOURCES) ===\n";
$stmt = $pdo->query("SELECT * FROM campaign_leadlist_xref");
print_r($stmt->fetchAll(PDO::FETCH_ASSOC));

echo "=== CAMPAIGN 1 EVENTS ===\n";
$stmt = $pdo->query("SELECT id, campaign_id, name, type, event_type, properties FROM campaign_events WHERE campaign_id = 1");
print_r($stmt->fetchAll(PDO::FETCH_ASSOC));

echo "=== CAMPAIGN 1 CONTACTS (campaign_leads) ===\n";
$stmt = $pdo->query("SELECT * FROM campaign_leads WHERE campaign_id = 1");
print_r($stmt->fetchAll(PDO::FETCH_ASSOC));

echo "=== CAMPAIGN EVENT EXECUTION LOGS ===\n";
$stmt = $pdo->query("SELECT * FROM campaign_lead_event_log");
print_r($stmt->fetchAll(PDO::FETCH_ASSOC));
