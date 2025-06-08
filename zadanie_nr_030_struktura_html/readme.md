## 🧱 Zadanie nr 03 – Podstawowa struktura HTML i pierwsze style

### 🎯 Cel

Dodanie minimalnej struktury HTML do pliku `index.php` oraz podstawowych stylów CSS do `style.css`, aby szablon zaczął przypominać prawdziwą stronę internetową.

### 🧩 Krok 1: Dodaj podstawową strukturę HTML do `index.php`

Zastąp tymczasowy kod w pliku `index.php` pełnym szkieletem dokumentu HTML. Dzięki temu WordPress będzie w stanie wyświetlić stronę w formacie zgodnym z przeglądarkami.

Zawartość pliku `index.php` powinna wyglądać następująco:

```HTML
<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tytuł strony</title>
</head>
<body>

  <h1>Witaj na mojej stronie!</h1>
  <p>To jest przykładowy paragraf tekstu.</p>

</body>
</html>
```

---

### 🎨 Krok 2: Dodaj podstawowe style do `style.css`

W tym kroku dodamy prosty zestaw reguł CSS, który poprawi wygląd strony i nada jej bardziej uporządkowany układ.

Otwórz plik `style.css` i **dopisz poniższy kod na końcu pliku**, po nagłówku komentarza z informacjami o motywie:


```CSS
* {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}

body {
  font-family: Arial, sans-serif;
  line-height: 1.6;
  background-color: #f4f4f4;
  color: #333;
  padding: 20px;
}

header {
  background-color: #222;
  color: #fff;
  padding: 20px 0;
  text-align: center;
}

main {
  background-color: #fff;
  padding: 20px;
  margin-top: 20px;
  border-radius: 8px;
  max-width: 800px;
  margin-left: auto;
  margin-right: auto;
  box-shadow: 0 0 10px rgba(0,0,0,0.1);
}

footer {
  text-align: center;
  margin-top: 40px;
  color: #777;
  font-size: 0.9em;
}
```

⚠️ **Uwaga:** Na tym etapie elementy `header`, `main` i `footer` nie są jeszcze obecne w kodzie HTML.  
🧱 Style mogą jednak pozostać w pliku – zostaną użyte, gdy dodamy te sekcje w kolejnych krokach. ✅


### 🧱 Krok 3: Rozbuduj strukturę HTML w `<body>`

Czas wykorzystać style zapisane wcześniej w `style.css`, dodając odpowiednie znaczniki HTML w sekcji `<body>` naszego pliku `index.php`.

🔧 **Zamień wcześniejszy testowy kod w `<body>` na poniższą strukturę:**

```HTML
  <header>
    <h1>Moja prosta strona</h1>
  </header>

  <main>
    <h2>Wprowadzenie</h2>
    <p>To jest bardzo podstawowy przykład strony HTML z osadzonym stylem CSS.</p>
    <p>Możesz edytować ten szablon według własnych potrzeb.</p>
  </main>

  <footer>
    &copy; 2025 Moje Imię. Wszelkie prawa zastrzeżone.
  </footer>
```

❗️ O rany! CSS nie działa, dlaczego?! :(  
🧠 Musimy wymyślić coś innego, żeby zadziałał.


### 🧱 Krok 4: Dodaj style CSS bezpośrednio w `<body>`

Spróbujemy rozwiązać problem, dodając kod CSS w bloku `<style>` w sekcji `<body>`.

---

### ⭐ Zadanie z gwiazdką: Twoja własna struktura HTML + CSS

Spróbuj zaprojektować i dodać **własną podstawową strukturę HTML i CSS** – zamiast kopiować gotowy przykład. Możesz inspirować się stronami, które lubisz, albo:

🧠 **Poproś ChatGPT o wygenerowanie szablonu** z sekcjami takimi jak np. `hero`, `about`, `contact`.  
🎨 Użyj prostych styli CSS – np. layout na `flexbox`, kolory, marginesy.

📁 Gdzie umieścić kod:
- HTML dodaj wewnątrz `<body>` w `index.php`
- CSS dodaj tymczasowo w bloku `<style>` w `body`

💡 Nie musisz robić nic skomplikowanego – nawet 2–3 sekcje z estetycznym układem będą świetnym ćwiczeniem!

---

✅ Jeśli nie masz pomysłu, zapytaj ChatGPT:
> "Wygeneruj mi podstawowy layout strony z nagłówkiem, treścią i stopką w HTML i CSS"
