res1 = Msgbox("R�d�marrage de l'ordinateur requis",vbYesNo + VbCritical)
if res1 = 6 then
set shl = createobject("wscript.shell" )
Wscript.echo "OK"
Else
res2 = InputBox("Raison du refus","Informations","Je suis occup�")
Do While res2 = ""
res2 = InputBox("Raison du refus","Informations","Je suis occup�")
Loop
Wscript.echo res2

End If
