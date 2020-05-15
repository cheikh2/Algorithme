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


			Exercice 7 

		Algorithme de decomosition 

Variables
montant, b20, b10, b5, p2, p1  :entiers
Début
  Répéter
    Afficher("Entrer le montant à décomposer")
    lire(montant)
    jusqu'au(montant > 0)
    b20 <- montant / 20
    b10 <- (montant % 20)/10
    b5 <-  ((montant%20)%10)/5
    p2 <-  (((montant%20)%10)%5)/2
    p1 <-  ((((montant%20)%10)%5)%2)
    Afficher("le montant a ",b20," billets de 20",b10,"billets de 10 ",b5,"billets de 5",p2,"pièces de 2 ",p1,"pièce de 1")
Fin


				Excercice 8:

		Algorithme equation second degre
      Variables
      a,b,c,delta,x1,x2 :reels
Debut
	Ecrire (" entrer les valeurs a, b et c de l’équation ax²+bx+c=0 : ")
    Lire(a, b, c)
    Si (a=0)
    Alors
    Ecrire (" équation du premier degré ")
    SI (b≠0)
    Alors Ecrire ("solution est ", -c/b)
    Sinon Ecrire (" Pas de solution")
    Finsi
    Sinon 
    delta=b^2-4*a*c
    Si delta < 0 alors
    Ecrire ("pas de solution")
    Sinon
    Si delta=0
    Ecrire ("x1<- x2=";-b/(2*a)
    Sinon
    Ecrire ("x1<-   -b-racine(delta/(2*a))
    Ecrire ("x2<-   -b+racine(delta/(2*a))
   Fin si
  Fin si
Fin



				Exercice 9:

     Algorithme calcul_durée;
      Question A
Var
hd,md,ha,ma,dha, dma: entiers
Début
     Ecrire (« entrer horaire de départ et d’arrivée »)
     Lire (hd, md, ha, ma)
     dma <= (ha*60+ma) – (hd*60+md)
     dha <= dma/60
     Ecrire (« durée de vol : » , dha, dma)
Fin

			Question B

variables hd,ha,md,ma,dha,dma :entier

Début
  Répéter
    Afficher("Entrer l'heure et minutes de départs ")
    lire(hd,md)
  jusqu'à((hd>0 et hd <  24) ET (md>0 et md < 60))
  Répéter
    Afficher("Entrer l'heure et minutes de d'arrivée ")
    lire(ha,ma)
  jusqu'à((ha>0 et ha < 24) ET (ma>0 et ma < 60))
  si(ha <= hd) alors
    dha <- 24 - hd + ha
    dma <- md + ma
    si(dma >= 60) alors
      dha <- dha + 1
      dma <- dma - 60
    fsi
    Afficher("la durée du vol est : ",dha,"heures et ",dma,"minutes ")
    sinon
      dha <- ha - hd
      dma <- ma + md
      si(dma >= 60) alors
        dha <- dha + 1
        dma <- dma - 60
      fsi
      Afficher("la durée du vol est : ",dha,"heures et ",dma,"minutes ")
  fsi
Fin



				Exercice 10:

Variables tableau tab[3]:entier
          i,j,tmp,min   :entier
Début
  Pour i <- 1 à 3 faire
    Afficher("Saisir une valeur")
    lire(tab[i])
    Finpour
    Pour i <- 1 à 2 faire
    min <- i
    Pour j <- i+1 à 3 faire
    si(tab[j] < tab[min])
    min <- j
    fsi
    Fpour
    si(min <> i) alors
    tmp <- tab[min]
    tab[min] <- tab[i]
    tab[i] <- tmp
    fsi
  Fpour
    Pour i <- 1 à 3 faire
    Afficher("les valeurs aprés tri sont  ", tab[i])
  Fpour
Fin


			Exercice 11

Variables a,b :entiers
          op  :chaine de caractère

Début
Afficher("Entrer une première valeur")
  	lire(a)
  	Afficher("Entrer l'opérateur")
  	lire(op)
  	Afficher("Entrer une deuxième valeur")
 	 lire(b)
  	Selon op faire
   		 '+' : Afficher("la somme des 2 valeurs est ", a+b)
   		 '*' : Afficher("le produit des 2 valeurs est ", a*b)
   		 '-' : Afficher("le résultat de ",a,"-","b","est : ", a-b)
   		 '/' : si(b <> 0) alors
            		Afficher("la division de ",a,"/",b,"=", a/b)
            	    	sinon
              			Afficher("erreur")
          		FinSi
    			sinon Afficher("l'opérateur saisi est incorrecte")
 	 FinSelon
Fin


				Exercice 12:

   Variables val, som, i :entier
som <- 0	

Début
    Ecrirer("Saisir une valeur")
  	lire(val)								
  	Pour i <- 1 à val faire           		
    	Si(val mod i = 0) Alors			
      		som <- som + i
    	FinSi
	Si(som = val) Alors
       			i <- val
		FinSi
    	FinPour
		Ecrire("le nombre : ",val," est parfait")
Fin

				Exercice 13:

Variables j,m,a : entier

Début
  Répéter
    Afficher("saisir la date sous format j/m/a")
    lire(j,m,a)
    jusqu'à((j > 0 et j < 31) et (m > 0 et m < 12) et (a>1900 et a < 2999))
    Si (m = 2 et j > 29) alors
      Afficher("la date saisie est invalide")
    fsi
    si((m = 4 ou m = 6 ou m = 9 ou m = 11) et j>30) Alors
      Afficher("la date est invalide")
    sinon
      Afficher("la date : ",j,"/",m,"/",a," est valide")
  fsi
Fin


          Exercice 14:

	Algorithme année_bessextile; 
variable
année, jour, mois: entiers
Debut
     Ecrire (« entrer jour, mois et année »)
      Lire(jour, mois, année)
     Si ((annee mod 4 =0 et annee % 100 <> 0) ou annee % 400 =0 ) 
     Alors 
     Ecrire(‘l’année que vous avez entrer est bissextile.’)
     Sinon 
     Ecrire(‘l’année que vous avez entrer n’ est pas bissextile .’)
  Finsi 
Fin

	          Exercice 15 : 
      Algorithme calcul de somme et moyenne

Variables
  n, i : Entier
  Somme=0

Debut
  Ecrire "Entrez un nombre : "
  Lire (n)
    Pour i ← 1 à n
      Somme ← Somme+i
    Fin Pour
  Écrire ("La somme est : ", Somme) 
  Écrire ("La moyenne est : ", Somme/n) 
Fin

          Exercice 16:

     Algorithme Division soustractions successives

Variables
  A,B,R: entiers
    Q : réel
    R←A
    Q←0
  Début
    Écrire ("Enter la valeur de A : ")
            Lire (A)
            Écrire ("Enter la valeur de B : ")
            Lire (B)
    Tant que R ≥ B Faire
            R ←R - B
            Q← Q+1
    Fin Tant que
Ecrire(“Quotient entier:”, Q)
Ecrire(“Rester:”, R)
Fin

        Exercice 21 :

   Algorithme Devinette

Variables 
  A, B : entiers

     Début

      Écrire ("Enter la valeur du premier utilisateur A : ")
            Lire (A)
	    Écrire ("Enter la valeur du deuxième utilisateur B : ")
            Lire (B)
	    Si B = A Alors
	    Ecrire("Bravo vous avez deviné le nombre!")
	    Sinon 
          Si B > A Alors
	            Ecrire("Entrer un nombre plus petit")
	        Sinon Si B < A
	            Ecrire("Entrer un nombre plus grand")
      Fin Si
	Fin Si
FIN