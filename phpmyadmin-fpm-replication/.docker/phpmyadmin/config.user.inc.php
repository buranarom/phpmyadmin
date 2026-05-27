<?php

$i = 0;

// 🟢 เครื่องที่ 1: MySQL Master
$i++;
$cfg['Servers'][$i]['verbose']   = 'MySQL Master';
$cfg['Servers'][$i]['host']      = 'mysql_master';
$cfg['Servers'][$i]['port']      = '3306';
$cfg['Servers'][$i]['auth_type'] = 'config';
$cfg['Servers'][$i]['user']      = 'root';      // ล็อก Username
$cfg['Servers'][$i]['password']  = 'root';      // ล็อก Password

// Hide databases matching this regex
$cfg['Servers'][$i]['hide_db'] = '^(information_schema|performance_schema|mysql|phpmyadmin|sys)$';

// บังคับให้เซิร์ฟเวอร์ลำดับที่ 1 (เซิร์ฟเวอร์หลัก) ใช้การเชื่อมต่อแบบ SSL
$cfg['Servers'][$i]['ssl'] = true;

// ปิดการ Verify ใบรับรองสำหรับ Self-signed Certificate ภายใน Docker
$cfg['Servers'][$i]['ssl_verify'] = false;

// 🟡 เครื่องที่ 2: MySQL Replica
$i++;
$cfg['Servers'][$i]['verbose']   = 'MySQL Replica (Read Only)';
$cfg['Servers'][$i]['host']      = 'mysql_replica';
$cfg['Servers'][$i]['port']      = '3306';
$cfg['Servers'][$i]['auth_type'] = 'config';
$cfg['Servers'][$i]['user']      = 'root';      // ล็อก Username
$cfg['Servers'][$i]['password']  = 'root';      // ล็อก Password

// Hide databases matching this regex
$cfg['Servers'][$i]['hide_db'] = '^(information_schema|performance_schema|mysql|phpmyadmin|sys)$';

// บังคับให้เซิร์ฟเวอร์ลำดับที่ 1 (เซิร์ฟเวอร์หลัก) ใช้การเชื่อมต่อแบบ SSL
$cfg['Servers'][$i]['ssl'] = true;

// ปิดการ Verify ใบรับรองสำหรับ Self-signed Certificate ภายใน Docker
$cfg['Servers'][$i]['ssl_verify'] = false;
