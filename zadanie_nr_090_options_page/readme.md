# 🧱 Zadanie nr 090 – WordCamp Options Page

## 🎯 Cel

Stworzyć własną globalną stronę opcji w kokpicie WordPressa przy użyciu wtyczki **Admin Options Pages**. Dzięki temu umożliwimy edycję treści stopki (np. tekstu copyright) bez edycji kodu szablonu.

---

## 🔌 Wymagania

Zainstalowana i aktywna wtyczka:  
🔗 [Admin Options Pages – by Johannes van Poelgeest](https://wordpress.org/plugins/admin-options-pages/)

---

## 🧭 Krok 1: Utwórz stronę opcji

1. Przejdź do **Options Pages > Add New Page**.
2. Wypełnij podstawowe pola zgodnie z poniższym:
   - **Custom menu**: zaznaczone
   - **Title**: `WordCamp`
   - **Position**: `90` (aby menu pojawiło się nisko)
   - **Menu page title**: `Website options`
   - **User access level**: `Administrator`

3. Zapisz stronę klikając **Update**.

---

## 🧾 Krok 2: Dodaj pole tekstowe do stopki

1. Kliknij **Add New Field**.
2. Wybierz typ pola: `Text field`
3. Uzupełnij pola:
   - **Field label**: `Copyright`
   - **Field name**: `copyright`
   - **Autoload**: ✅ włączone
   - Inne pola możesz zostawić puste

4. Zapisz stronę ponownie.

🔎 Patrz: `plugin_setup.png` – ten zrzut pokazuje przykładową konfigurację.

![Przykład](plugin_setup.png)

---

## 🖥️ Krok 3: Wyświetl tekst `copyright` w motywie

W pliku `footer.php` (lub `template-parts/footer.php`) wstaw:

```php
<?php
if ( function_exists( 'get_admin_option' ) ) {
  echo '<p>' . esc_html( get_admin_option( 'copyright' ) ) . '</p>';
}
?>
