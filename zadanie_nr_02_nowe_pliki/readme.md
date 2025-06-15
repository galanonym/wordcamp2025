## 🧱 Zadanie nr 02 – Pierwsze pliki

### 🎯 Cel

Zbudowanie podstawowej struktury szablonu WordPress od zera.

---

### 📂 Krok 1: Utwórz nowy folder szablonu

Przejdź do katalogu projektu:

`public_html/wp-content/themes/`

Utwórz nowy folder z nazwą własnego motywu, np.:

`public_html/wp-content/themes/wordcamp-2025/`

Uwaga: Nazwa folderu nie powinna zawierać spacji ani wielkich liter.

---

### 📄 Krok 2: Utwórz dwa pliki wymagane przez WordPress

W nowo utworzonym folderze dodaj dwa pliki:

#### 1. `index.php`

Utwórz plik `index.php` i wpisz do niego testowy kod:

```php
<?php
echo 'Testuję na WordCamp 2025';
```

#### 2. `style.css`

Utwórz plik style.css i na jego początku wklej poniższy nagłówek:

```css
/*
Theme Name: Szablon WordCamp 2025 
Author: Piotr Wypych Kalis Media
Description: Szablon stworzony od zera na WordCamp 2025  
Version: 0.0.1
License: NO LICENSE
Text Domain: wordcamp-2025
*/
```

### Wyjaśnienie atrybutów

| Atrybut         | Obowiązkowy | Opis |
|------------------|--------------|------|
| `Theme Name`     | ✅ Tak        | Nazwa motywu wyświetlana w panelu WordPress (Wygląd → Motywy). Musi być unikalna. |
| `Author`         | ❌ Nie        | Imię i nazwisko lub nazwa firmy twórcy motywu. Czysto informacyjne. |
| `Description`    | ❌ Nie        | Opis motywu widoczny w panelu administratora. Może zawierać przeznaczenie, technologie, kontekst itp. |
| `Version`        | ❌ Nie        | Numer wersji motywu (np. `1.0.0`, `0.1-beta`). Przydatne przy aktualizacjach i kontroli wersji. |
| `License`        | ❌ Nie        | Typ licencji (np. `GPLv2`, `MIT`). Jeśli motyw nie będzie publiczny, można wpisać `NO LICENSE`. Dla motywów publicznych WordPress wymaga licencji zgodnej z GPL. |
| `Text Domain`    | ✅ Tak (jeśli używasz tłumaczeń) | Identyfikator używany do tłumaczeń (`__()`, `_e()` itp.). Powinien być zgodny z nazwą folderu motywu. |


---

### 🔍 Krok 3: Sprawdź czy motyw jest widoczny i aktywuj go

1. Przejdź do `Appearance > Themes` (Wygląd → Motywy).
2. Znajdź swój nowy motyw na liście. Powinien być widoczny z nazwą i opisem podanym w `style.css`.
3. Kliknij „Activate” (Aktywuj), aby go opublikować.

Jeśli motyw nie jest widoczny:
- Upewnij się, że folder został utworzony we właściwym miejscu (`wp-content/themes/`)
- Sprawdź, czy plik `style.css` zawiera poprawnie sformatowany nagłówek


## 🌟 Zadanie dodatkowe: Rozszerz nagłówek `style.css`

Zajrzyj do oficjalnej dokumentacji WordPressa:

🔗 https://developer.wordpress.org/themes/core-concepts/main-stylesheet/

Plik `style.css` w motywie WordPress zawiera specjalny nagłówek w formacie komentarza. Oprócz podstawowych pól, możesz dodać więcej informacji, które ułatwią identyfikację, kompatybilność i ewentualną publikację motywu.

### 🧠 Co zrobić?

1. Otwórz swój plik `style.css`.
2. Na podstawie dokumentacji dodaj do nagłówka kilka dodatkowych pól.

## 🌟 Zadanie dodatkowe: Dodaj plik `screenshot.png` i sprawdź menu `Appearance > Themes`
