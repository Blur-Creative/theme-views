<div style="font-family:arial; font-size:12px;">
            {include file="string:{config name=emailheaderhtml}"}
            <br/><br/>
            <p>Hallo {$billingaddress.salutation|salutation} {$billingaddress.lastname},<br/>
                <br/>
                vielen Dank für Ihre Bestellung bei {config name=shopName} (Nummer: {$sOrderNumber}) am {$sOrderDay} um {$sOrderTime}.<br/>
                <br/>
                <strong>Informationen zu Ihrer Bestellung:</strong></p><br/>
            <table width="80%" border="0" style="font-family:Arial, Helvetica, sans-serif; font-size:12px;">
                <tr>
                    <td bgcolor="#F7F7F2" style="border-bottom:1px solid #cccccc;"><strong>Pos.</strong></td>
                    <td bgcolor="#F7F7F2" style="border-bottom:1px solid #cccccc;"><strong>Artikel</strong></td>
                    <td bgcolor="#F7F7F2" style="border-bottom:1px solid #cccccc;">Bezeichnung</td>
                    <td bgcolor="#F7F7F2" style="border-bottom:1px solid #cccccc;"><strong>Menge</strong></td>
                    <td bgcolor="#F7F7F2" style="border-bottom:1px solid #cccccc;"><strong>Preis</strong></td>
                    <td bgcolor="#F7F7F2" style="border-bottom:1px solid #cccccc;"><strong>Summe</strong></td>
                </tr>

                {foreach item=details key=position from=$sOrderDetails}
                <tr>
                    <td style="border-bottom:1px solid #cccccc;">{$position+1|fill:4} </td>
                    <td style="border-bottom:1px solid #cccccc;">{if $details.image.src.0 && $details.modus == 0}<img style="height: 57px;" height="57" src="{$details.image.src.0}" alt="{$details.articlename}" />{else} {/if}</td>
                    <td style="border-bottom:1px solid #cccccc;">
                      {$details.articlename|wordwrap:80|indent:4}<br>
                      Artikel-Nr: {$details.ordernumber|fill:20}
                    </td>
                    <td style="border-bottom:1px solid #cccccc;">{$details.quantity|fill:6}</td>
                    <td style="border-bottom:1px solid #cccccc;">{$details.price|padding:8|currency}</td>
                    <td style="border-bottom:1px solid #cccccc;">{$details.amount|padding:8|currency}</td>
                </tr>
                {/foreach}

            </table>
        
            <p>
                <br/>
                <br/>
                Versandkosten: {$sShippingCosts|currency}<br/>
                Gesamtkosten Netto: {$sAmountNet|currency}<br/>
                {if !$sNet}
                {foreach $sTaxRates as $rate => $value}
                zzgl. {$rate|number_format:0}% MwSt. {$value|currency}<br/>
                {/foreach}
                <strong>Gesamtkosten Brutto: {$sAmount|currency}</strong><br/>
                {/if}
                <br/>
                <br/>
                <strong>Gewählte Zahlungsart:</strong> {$additional.payment.description}<br/>
                {$additional.payment.additionaldescription}
                {if $additional.payment.name == "debit"}
                Ihre Bankverbindung:<br/>
                Kontonr: {$sPaymentTable.account}<br/>
                BLZ: {$sPaymentTable.bankcode}<br/>
                Institut: {$sPaymentTable.bankname}<br/>
                Kontoinhaber: {$sPaymentTable.bankholder}<br/>
                <br/>
                Wir ziehen den Betrag in den nächsten Tagen von Ihrem Konto ein.<br/>
                {/if}
                <br/>
                <br/>
                {if $additional.payment.name == "prepayment"}
                Unsere Bankverbindung:<br/>
                Konto: ###<br/>
                BLZ: ###<br/>
                {/if}
                <br/>
                <br/>
                <strong>Gewählte Versandart:</strong> {$sDispatch.name}<br/>
                {$sDispatch.description}<br/>
            </p>
            <p>
                {if $sComment}
                <strong>Ihr Kommentar:</strong><br/>
                {$sComment}<br/>
                {/if}
                <br/>
                <br/>
                <strong>Rechnungsadresse:</strong><br/>
                {$billingaddress.company}<br/>
                {$billingaddress.firstname} {$billingaddress.lastname}<br/>
                {$billingaddress.street} {$billingaddress.streetnumber}<br/>
                {if {config name=showZipBeforeCity}}{$billingaddress.zipcode} {$billingaddress.city}{else}{$billingaddress.city} {$billingaddress.zipcode}{/if}<br/>
                {$additional.country.countryname}<br/>
                <br/>
                <br/>
                <strong>Lieferadresse:</strong><br/>
                {$shippingaddress.company}<br/>
                {$shippingaddress.firstname} {$shippingaddress.lastname}<br/>
                {$shippingaddress.street} {$shippingaddress.streetnumber}<br/>
                {if {config name=showZipBeforeCity}}{$shippingaddress.zipcode} {$shippingaddress.city}{else}{$shippingaddress.city} {$shippingaddress.zipcode}{/if}<br/>
                {$additional.countryShipping.countryname}<br/>
                <br/>
                {if $billingaddress.ustid}
                Ihre Umsatzsteuer-ID: {$billingaddress.ustid}<br/>
                Bei erfolgreicher Prüfung und sofern Sie aus dem EU-Ausland<br/>
                bestellen, erhalten Sie Ihre Ware umsatzsteuerbefreit.<br/>
                {/if}
                <br/>
                <br/>
                Für Rückfragen stehen wir Ihnen jederzeit gerne zur Verfügung.<br/>
                {include file="string:{config name=emailfooterhtml}"}
            </p>
        </div>