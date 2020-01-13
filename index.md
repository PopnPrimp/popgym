---
layout: home
---

<h2>{{ site.popgym.config.yml_list_title }}</h2>
<ul>
   {% for item in site.popgym.config.yml %}
      <li><a href="{{ item.url }}">{{ item.title }}</a></li>
   {% endfor %}
</ul>
