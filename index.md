---
layout: home
---

<h2>{{ site.config.docs_list_title }}</h2>
<ul>
   {% for item in ite.config.docs %}
      <li><a href="{{ item.url }}">{{ item.title }}</a></li>
   {% endfor %}
</ul>
