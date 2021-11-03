Projekt utworzony za pomocą  Laravel jest on dadatkiem do mojego CV..
Wykorzystuje Laravel Breeze(dostosowany do potrzeb projektu).
Założeniem projektu jest że: 
-użytkownicy mają dostęp do strony(oprócz panelu administratora) bez potrzeby logowania
-w bazie danych jest jeden uzytkownik : administrator
-admistrator zarzadza zawartoscią zakładek
news i project(dodawnie,usuwanie,edycja) z panelu admistracyjnego.
Dla celów CV. administrator ma możliwość  edycji wiadomośći bezpośrednio z zakładki news(przyciski widoczne tylko dla administratora).
-administrator ma przypisną role: administrator(relacja eloquent many to many ),
nie jest to konieczne przy jednym uzytkowniku ale zostało dodane jako część CV.
- wszystkie żądania do servera wykonywane przez daministratora są zbezpieczone od strony frontend jak i backend(policies,gates),
