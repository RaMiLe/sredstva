
<form method="POST" action="https://merchant.webmoney.ru/lmi/payment.asp" target="blank">
    <input name="LMI_PAYMENT_AMOUNT" size="5" value="10" style=" border: 1px solid"> WMZ
    <input type="hidden" name="LMI_PAYMENT_DESC" value="Пополнение счета <? echo $plyrname; ?>">
<input type="hidden" name="LMI_PAYEE_PURSE" value="<? echo $u_wmz=Z149398739935; ?>">
<input type="hidden" name="user" value="<? echo $plyrname; ?>">
<input type=submit value="Оплатить">
</form>
