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

## ⭐ Zadanie z gwiazdką (opcjonalne)

Dodaj plik screenshot.png do folderu motywu:

`public_html/wp-content/themes/wordcamp-2025/screenshot.png`

Wymagania techniczne:

- Format: PNG
- Nazwa: dokładnie screenshot.png
- Rozmiar: 1200×900 px (zalecany przez WordPress)
- Obrazek nie musi być zrzutem ekranu – może to być logo, mockup lub kolorowy placeholder

Po dodaniu odśwież panel administratora WordPress. Twój motyw powinien wyświetlać się z miniaturą graficzną obok nazwy i opisu – tak jak inne motywy systemowe.
