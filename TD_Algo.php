                        TD Algorithmique


                    Exercice 1:

Algorithme Partie Division
Variables 
a,b,q,r,: entiers
qr:réel
Début

Écrire ("Enter la valeur de a : ")
     	Lire (a) 
	Écrire ("Enter la valeur de b : ")
     	Lire (b) 
	q  ←a div b
	r  ← a%b
	qr  ← a/b
Ecrire(“Quotient entier:”, q)
Ecrire(“Quotient réel:”, qr)
Ecrire(“Rester:”, r)
Fin


                Exercice 2

Algorithme Surface et Perimetre d'un cercle
Variables Rayon, Surface, Périmètre: Reels ;
Constante Pi = 4 x arctan (1)
Debut
 Ecrire ("Donner le rayon du cercle : ")
     	 Lire (Rayon) ;
     	 Surface ← (Rayon x Rayon) * Pi
     	 Perimètre ←Rayon * 2 * Pi
    	 Ecrire ("La surface du cercle est : ", Surface)
   	 Ecrire ("Le périmètre du cercle est : ", Perimetre)
Fin


        Exercice 3:

Algorithme calcul résistance
Version 1
Variables
r1,r2,r3,Rpar,Rser: réels ;
Début
Ecrire(‘entrer la valeur de r1 : ‘)
      	Lire(r1)
      	Ecrire(‘ entrer la valeur de r2 : ’)
      	Lire(r2)
      	Ecrire(‘ entrer la valeur de r3 : ’)
      	Lire(r3)
      	Rser r1+r2+r3
      	Rpar (r1*r2*r3) / (r1*r2+r1*r3+r2*r3)
      	Ecrire(‘ la resistance equivalente à r1 ,r2 et r3 en serie est : ‘,Rser)
      	Ecrire(‘ la resistance equivalente à r1 ,r2 et r3 en parallele est : ‘,Rpar)
Fin
Version 2:
Var
choix:entier
r1,r2,r3,Rpar,Rser: reels ;
Debut
       Ecrire(‘entrer choix : ‘)
       Lire(choix) ;
       si choix = 1 alors
       Rser r1+r2+r3
       Ecrire(‘ la résistance équivalente à r1 ,r2 et r3 en serie est : ‘,Rser)
       sinon si choix = 2 alors
       Rpar (r1*r2*r3) / (r1*r2+r1*r3+r2*r3)
       Ecrire(‘ la resistance equivalente a r1 ,r2 et r3 en parallele est : ‘,Rpar)
   Fin Si
Fin


                Exercice 4:
    Algorithme Puissance
Version1:
Variables 
n: entier
x : réel
Debut
	Ecrire(‘Entrer la valeur de x’)
	Lire(x)
	Ecrire(‘Entrer la valeur de n’)
	Lire(n)
	Ecrire(‘le resultat de ’,x,’ à la puissance’,n ,‘ : ’, pow(x,n))
Fin

            Version2:
Variables 
n,i: entiers
x ,puis: réel
Debut
	Ecrire(‘Entrer la valeur de x’)
	Lire(x)
	Ecrire(‘Entrer la valeur de n’)
	Lire(n)
	i ←1
	puis ←1
	Tant Que i<=n
		puis ←puis*x
		i←i+1
	FinTantQue
	Ecrire(‘le résultat de ’,x,’ à la puissance’,n ,‘ : ’, puis)
Fin

            Exercice 5:

Algorithme Somme
Variables
val, i, somme: entiers
somme← 0
Début
 	Pour i ← 1 à 5 Faire
     		Écrire (‘ entrer valeur’)
     		Lire (val)
     		somme←  somme+val
   	Fin Pour
 	Afficher somme
Fin


                Exercice 6:
        Algorithme calcul distance
Var
X1,x2,y1,y2 ,d: réels 
Début
       Ecrire(‘entrer la valeur de x1,y1 : ‘) 
       Lire(x1,y1) ;
       Ecrire(‘ entrer la valeur de x2,y2 : ‘) 
       Lire(x2,y2) 
       d = sqrt((x2-x1)^2 + (y2-y1)^2) 
       Écrire ("La distance est : ", d) 
Fin

                Exercice 6:
        Algorithme calcul distance
Var
X1,x2,y1,y2 ,d: réels 
Début
       Ecrire(‘entrer la valeur de x1,y1 : ‘) 
       Lire(x1,y1) ;
       Ecrire(‘ entrer la valeur de x2,y2 : ‘) 
       Lire(x2,y2) 
       d = sqrt((x2-x1)^2 + (y2-y1)^2) 
       Écrire ("La distance est : ", d) 
Fin
