## Demo 1
Skapa en simpel webbsida baserad på php

## Demo 2
Utöka sidan med mer innehåll och skapa version 2

Viktiga delar att notera
- Cachening och återanvändning av befintliga lager med Docker
- Möjlighet att köra flera version parallellt eller enkelt växelvis, processen är versionshanterad

## Demo 3+4
Skapa lager med olika inriktningar. Specialister kan förberede images med deras expertis, sedan kan nästa expertis ta vid och sist vi utvecklare och lägga på en applikation.

Viktiga delar att notera
- Det går att bygga vidare på redan befintliga images
- Det går att skapa dessa befintliga images som gemensamma images för det man vill återanvända i organisationen.
- Möjlighet att köra flera version parallellt eller enkelt växelvis, processen är versionshanterad

## Demo 4
- Enkelt starta applikatione i olika versioner av libraries/applikationsservrar eller annat
- Utvecklingsmiljö med applikationsserver, konfiguration som i produktion eller alla andra miljöer med docker-compose, monterad volym och ev. build