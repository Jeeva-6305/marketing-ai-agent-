SELECT 'leads (contacts)' as tbl, count(*) as cnt FROM leads
UNION ALL SELECT 'lead_lists (segments)', count(*) FROM lead_lists
UNION ALL SELECT 'emails', count(*) FROM emails
UNION ALL SELECT 'campaigns', count(*) FROM campaigns;

