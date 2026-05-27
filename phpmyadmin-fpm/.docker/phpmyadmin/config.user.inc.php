<?php
// Hide databases matching this regex
$cfg['Servers'][1]['hide_db'] = '^(information_schema|performance_schema|mysql|phpmyadmin|sys)$';

// บังคับให้เซิร์ฟเวอร์ลำดับที่ 1 (เซิร์ฟเวอร์หลัก) ใช้การเชื่อมต่อแบบ SSL
$cfg['Servers'][1]['ssl'] = true;

// ปิดการ Verify ใบรับรองสำหรับ Self-signed Certificate ภายใน Docker
$cfg['Servers'][1]['ssl_verify'] = false;
