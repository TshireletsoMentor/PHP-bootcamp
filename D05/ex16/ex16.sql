SELECT COUNT(DISTINCT `id_fim`) AS `movies`
FROM `db_tmentor`.`member_history`
WHERE DATE BETWEEN '2006/10/30' AND '2007/07/27'
OR (EXTRACT(DAY FROM `date`) = 24 AND EXTRACT(MONTH FROM `date`) = 12);