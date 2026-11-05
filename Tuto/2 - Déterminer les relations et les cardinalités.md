|Entité A     |Cardinalité A     |Verbe métier    |Cardinalité B    |Entité B    |
|---|---|---|---|---
|VILLE        |       1,N        |    habite      |       1,1       |AUTEUR      
|
|AUTEUR       |       1,N        |     Rédige     |       1,1       |ARTICLE     
|
|CATEGORIE    |       1,N        |     regroupe   |       1,1       |ARTICLE     
|
|ARTICLE      |       0,N        |     posséde    |       0,N       |TAG         
|

1. 
- Une VILLE contient plusieur AUTEUR .
- Un AUTEUR habite dans une VILLE .

2. 
- Un AUTEUR redige plusieur ARTICLE .
- Un ARTICLE est redige par un AUTEUR .

3. 
- Une CATEGORIE regroupe plusieur ARTICLE .
- Un ARTICLE est regroupe par une CATEGORIE .

4. 
- Un ARTICLE possede plusieur TAG .
- Un TAG est possede plusieur ARTICLE .