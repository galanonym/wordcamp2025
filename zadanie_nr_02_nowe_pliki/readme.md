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

#### 1. `style.css`

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
