SELECT REVERSE(SUBSTRING(`phone_number`, 2)) AS `rebmunenohp`
FROM `db_tmentor`.`distrib`
WHERE `phone_number` LIKE '%05%';