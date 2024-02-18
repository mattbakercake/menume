# MenuMe

Laravel sandbox to fiddle with - not much of a concrete plan at the moment, but the seed of an idea.  

A place to consolidate receipes, suggest a menu from the receipes (with selectable criteria e.g. specific ingredients, veggie only etc) for
a period of time (a week, 2 weeks etc.) and generate an auditable shopping list.

Probably an API backend, which would allow any variety of frontends (JS SPA, mobile app etc).

A single API resource route exists initially (`http://127.0.0.1:8000/api/receipe`) that can display a collection of receipe resources, display a specific
receipe resource with method steps and ingredients and can update the receipe/steps/ingredients

* API resource controller and route
* Receipe/ReceipeSteps/Ingredient API resource classes
* Receipe update/store form requests to break validation rules out from controller