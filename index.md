---
layout: home
---

<h2>{{ site.data.config.yml_list_title }}</h2>
<ul>
   {% for item in site.data.config.yml %}
      <li><a href="{{ item.url }}">{{ item.title }}</a></li>
   {% endfor %}
</ul>
