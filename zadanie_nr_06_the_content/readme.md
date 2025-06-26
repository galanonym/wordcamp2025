# 🧱 Zadanie nr 06 - Treść wpisu 

## 🎯 Cel  
Wyświetlić dynamiczną treść strony, stosując wzorzec MVC w stylu WordPressa.

---

## 🔹 Co robi `the_content()`

- Wyświetla treść posta zapisaną w edytorze WordPress.
- Automatycznie przetwarza shortcody, embed i filtry.
- Alternatywa: `get_the_content()` zwraca treść jako zmienną.

---

## 🔹 Plik `template-parts/content.php`

### Dla początkujących

```php
<section class="content">
  <?php the_content(); ?>
</section>
```

### Dla znających podstawy PHP

```php
<?php
$content = get_the_content();
if (!$content) {
	return;
}
?>

<section class="content">
  <?php echo $content; ?>
</section>
```

```css
.content h2, .content h3 {
  margin-top: 40px;
  margin-bottom: 10px;
}

.content p {
  margin-bottom: 20px;
}

.content ul, .content ol {
  padding-left: 20px;
  margin-bottom: 20px;
}

.content li {
  margin-bottom: 10px;
}

.content hr {
  border: none;
  border-top: 2px solid #ccc;
  margin: 40px 0;
}
```

---

## 🔹 Dlaczego `return;`?

- Jeśli nie ma treści – nic nie wyświetlamy.
- Unikamy pustego `<section>`.

---

## 🔹 MVC w nowoczesnym wydaniu

- **Model**: WordPress jako źródło danych (`get_the_content()`)
- **Kontroler**: górna część pliku (logika warunkowa)
- **Widok**: HTML (sekcja `<section>`)

➡ W nowoczesnym podejściu MVC dzielimy według **funkcjonalności**, nie typów plików (`controllers/`, `views/`, itd.).

## 🔹 Krok: Ustawienie strony głównej jako statycznej

1. W WordPressie przejdź do **Strony > Dodaj nową** i utwórz stronę o tytule **Homepage**.
2. Dodaj jakąś treść - np. z kursywą lub pogrubieniami. 
3. Opublikuj ją.
3. Przejdź do **Ustawienia > Czytanie (Settings > Reading)**.
4. W sekcji **"Strona główna wyświetla" (Your homepage displays)** wybierz:
   - **Strona statyczna (A static page)**
   - **Strona główna (Homepage)** – ustaw na utworzoną przed chwilą stronę.

✅ Od teraz WordPress (oraz `index.php`) będzie używał tej strony jako strony głównej.

---

## 🌟 Zadanie dodatkowe: Przetwarzanie treści przez filtry WordPressa

W dotychczasowym przykładzie pobieraliśmy treść wpisu za pomocą `get_the_content()` i przypisywaliśmy ją do zmiennej `$content`.  
Tym razem zmodyfikuj ten kod tak, aby treść została przetworzona przez system filtrów WordPressa – dokładnie tak, jak robi to funkcja `the_content()`:

```php
$content = apply_filters('the_content', get_the_content());
```
### 🧠 Co zrobić?

1. Zastąp istniejące przypisanie:

   ```php
   $content = get_the_content();
   ```
   nową wersją:

   ```php
   $content = apply_filters('the_content', get_the_content());
   ```
   
2. Odśwież stronę i sprawdź, czy treść wygląda inaczej.  
3. Porównaj wynik działania `echo $content;` z `the_content();`.

---

### 🔍 Co sprawdzić?

- Jakie zmiany pojawiły się w sposobie wyświetlania treści?
- Jakie funkcje są podpięte do filtra `'the_content'` (np. shortcodes, `wpautop`, oEmbed)?
- Czy efekt końcowy przypomina wynik działania `the_content()`?
- Kiedy warto używać `apply_filters('the_content', ...)`, a kiedy nie?

---

### 🎯 Cel

Zrozumieć, jak WordPress przetwarza treść wpisów i jaką rolę odgrywa filtr `'the_content'` w generowaniu finalnego HTML-a.
