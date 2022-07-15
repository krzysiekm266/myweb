## Myweb <br>
Projekt utworzony za pomocą  Laravel jest on dadatkiem do mojego CV.. <br>
Wykorzystuje Laravel Breeze(dostosowany do potrzeb projektu).<br>
Założeniem projektu jest : <br>
-użytkownicy mają dostęp do strony(oprócz panelu administratora) bez potrzeby logowania <br>
-w bazie danych jest jeden uzytkownik : administrator <br>
-admistrator zarzadza zawartoscią zakładek news i project(dodawnie,usuwanie,edycja) z panelu admistracyjnego. <br>
Dla celów CV. administrator ma możliwość  edycji wiadomośći bezpośrednio<br>
z zakładki news(przyciski widoczne tylko dla administratora).<br>
-administrator ma przypisną role: administrator(relacja eloquent many to many ),<br>
nie jest to konieczne przy jednym uzytkowniku ale zostało dodane jako część CV.<br>
-wszystkie żądania do servera wykonywane przez daministratora są zbezpieczone od strony frontend jak i backend(policies,gates).<br>

## Screenshots from dev version 
<br>
![Screen](/myweb/screenshots/myweb1.png "Screen") <br>
![Screen](/myweb/screenshots/myweb2.png "Screen") <br>
