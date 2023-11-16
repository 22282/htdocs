INSERT INTO gs_an_table(name,email,naiyou,age,indate)VALUES('鈴木','test02','memo01',10,sysdate());
INSERT INTO gs_an_table(name,email,naiyou,age,indate)VALUES('佐々木','test03','memo01',20,sysdate());
INSERT INTO gs_an_table(name,email,naiyou,age,indate)VALUES('遠藤','test04','memo01',20,sysdate());
INSERT INTO gs_an_table(name,email,naiyou,age,indate)VALUES('富安','test05','memo01',30,sysdate());
INSERT INTO gs_an_table(name,email,naiyou,age,indate)VALUES('上田','test06','memo01',30,sysdate());

SELECT name,email FROM gs_an_table;
SELECT * FROM gs_an_table;
SELECT * FROM gs_an_table WHERE id=3;

SELECT * FROM gs_an_table WHERE email LIKE '%test1%';
SELECT * FROM gs_an_table ORDER BY age DESC;
SELECT * FROM gs_an_table ORDER BY age ASC;
SELECT * FROM gs_an_table ORDER BY age ASC LIMIT 3;