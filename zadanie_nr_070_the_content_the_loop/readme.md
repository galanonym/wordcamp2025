# 🧱 Zadanie nr 070 - Treść wpisu 

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

.content ul {
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
