---
layout: post
title:  "Reino Aritmetico v0.0.2"
date:   2014-09-05 19:13:37
categories: noticias
featured_image: "img/news/release-0.0.2.jpg"
tags: ["Reino Aritmetico", 'Release']
---

Hoy lanzamos la versión 0.0.2 de nuestro proyecto Reino Aritmético. En esta oportunidad se incorporo la funcionalidad básica de jugabilidad.
Si no conoces el proyecto te invitamos a leer nuestra sección de proyectos.

<h3>Cambios móviles/servidor</h3>

En esta oportunidad incorporamos la capacidad para los jugadores de elegir su personaje tipo al momento de registrarse en el sistema. Este personaje puede ser
un arquero, guerrero o mago. Una vez registrado los niños pueden ver a su personaje unirse a una partida.

<h3>Cambios móviles/nodo</h3>

Se estableció comunicación a través de sockets entre los móviles y el juego. Tomamos esta decisión para poder tener comunicación bilateral basada en eventos (JavaScript funciona de
maravilla con eventos).

Además el profesor puede configurar partidas con cierto numero de jugadores y selección de numero de preguntas para que luego los niños puedan unirse.
Hay un ciclo basico del juego en que se les manda una pregunta a cada uno y se espera su respuesta, la que se muestra en la pantalla principal. Durante una partida
deben contestar las preguntas propuestas. El juego termina una vez que todos contestaron sus preguntas.

<h3>Cambios nodo/servidor</h3>

El juego en la aplicación de escritorio al momento de iniciar una partida le pide un conjunto de preguntas (de cierta dificultad establecida por el profesor en el servidor) para poder realizar la partida.
