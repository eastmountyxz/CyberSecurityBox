# CyberSecurityBox
该资源为网络安全和Web渗透各种类型题目的离线靶场，主要采用PHP语言实现，包括XSS攻击、文件上传漏洞、SQL注入等，基础性资源，希望对安全初学者有所帮助。加油~

---

## Oracle11安装文件
- https://pan.baidu.com/s/1ps9beNx4ggywTPnTGw5WhA 提取码：r0ge 


---

## SQL注入

```php
SELECT USERNAME from ALL_USERS; --查看所有用户
select TABLESPACE_NAME FROM USER_TABLESPACES; --查看所有的表空间
select TABLE_NAME from USER_TABLES WHERE ROWNUM=1; --查看当前用户的所有表
select column_name from user_tab_columns where table_name='DEMO'; --查看当前用户的所有的列，如查询DEMO表下的所有列
SELECT object_name from user_objects; --查看当前用户的所有对象（表名称，约束、索引）
SELECT * from session_roles; --当前用户的权限
SELECT * from v$version WHERE rownum=1; --获取数据库版本
select * from product_component_version; --同上
SELECT member from v$logfile WHERE rownum=1; --服务器操作系统
select instance_name from v$instance;--服务器SID
SELECT sys_context('userenv','current_user') from dual; --当前连接用户
SELECT user FROM dual; --当前用户
SELECT username FROM all_users ORDER BY username; --列出所有用户
SELECT DISTINCT owner FROM all_tables; --列出数据库
SELECT table_name FROM all_tables; --列出表名
SELECT owner, table_name FROM all_tables; --列出表名
SELECT column_name FROM all_tab_columns WHERE TABLE_NAME='ADMIN'; --查询表所有列
SELECT name FROM V$DATAFILE; --定位文件
```

---

## 文件上传漏洞

- Pass-01
- Pass-02
- Pass-03
- ...
- Pass-19
- Pass-20
- Pass-21

参加链接：

- https://github.com/c0ny1/upload-labs

---

## XSS攻击

- XSS案例：第1关
- XSS案例：第2关
- XSS案例：第3关
- XSS案例：第4关
- XSS案例：第5关
- XSS案例：第6关
- XSS案例：第7关
- XSS案例：第8关
- XSS案例：第9关

---

## pikachu靶场

- https://github.com/zhuifengshaonianhanlu/pikachu

---

By: 2021-03-23 Eastmount
