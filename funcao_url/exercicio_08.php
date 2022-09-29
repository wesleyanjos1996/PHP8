<?php
$q = "https://www.google.com.br/search?q=curso+de+php+8&sxsrf=ALiCzsbeh7k_cDV3UFFXczo0almSoPNTtg%3A1664436926398&source=hp&ei=vko1Y8GyFpzR1sQP78SpwAw&iflsig=AJiK0e8AAAAAYzVYzhWmF0ksJrnNcQ9DmqeHFkfcrpK_&oq=cu&gs_lcp=Cgdnd3Mtd2l6EAMYADIECCMQJzIECCMQJzIECCMQJzIECAAQQzIECAAQQzIECAAQQzIECAAQQzIECAAQQzIICAAQgAQQsQMyCwgAEIAEELEDEIMBUABYtgFgiAloAHAAeACAAYQBiAGBApIBAzAuMpgBAKABAQ&sclient=gws-wiz";

print_r(parse_url($q));
print_r(parse_url($q, PHP_URL_SCHEME));
print_r(parse_url($q, PHP_URL_HOST));
print_r(parse_url($q, PHP_URL_PATH));
print_r(parse_url($q, PHP_URL_QUERY));
echo '<a href="?'.http_build_query($q).'">Busca PHP8</a>';
?>