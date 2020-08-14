Om de opdrachten in te zien
stap 1 haal deze repository op van Github
stap 2 maak lokaal een database aan en zet het pad erheen in de .ENV file op regel 37
stap 3  php bin/console doctrine:migrations:migrate
stap 4 run  symfony server:start

- de oplossing op de eerste opdracht staat nu op http://127.0.0.1:8000/1
- op http://127.0.0.1:8000/2 kan je een tekst invullen en omdraaien
- op http://127.0.0.1:8000/3 kan je een nieuw wachtwoord aanvragen voor een bestaande username. Deze wordt alleen nog niet opgeslagen en nog niet echt verstuurd
Gebruikers staan nog niet in de tabel. Maak er bijvoorbeeld 1 aan met
INSERT INTO `user` (`username`, `email`, `password`)
	VALUES ('test1', 'test1@geenechteemail.abc', 'nephashwachtwoord');
- op http://127.0.0.1:8000/4/links/{array} en http://127.0.0.1:8000/4/rechts/{array} kan je vierkante arrays van arrays respectievelijk linksom en rechtsom draaien
