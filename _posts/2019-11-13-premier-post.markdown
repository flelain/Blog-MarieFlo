---
title: "Bienvenue sur notre Blog !"
layout: post
date: 2019-11-13 21:15
image: /assets/images/markdown.jpg
headerImage: false
tag:
- markdown
- blog
star: true
category: blog
author: florentlelain
description: ouverture de notre blog et... premier post
---

Bonjour à tous sur notre Blog, fraîchement créé ! D'ailleurs, c'est tellement frais que ce premier billet est autant une façon de vous y souhaiter la bienvenue que de tester la parution d'un post :)

Voilà maintenant 3 mois que nous avons atterri à Vancouver. Déjà beaucoup de choses se sont passées pour nous cinq ici. Il est temps de commencer à les partager avec vous tous, grâce à quelques histoires et photos à l'appui !

## Nos premiers jours

![Markdowm Image](site.url/assets/images/posts/IMG_6893.jpg)
<figcaption class="caption">Jericho beach</figcaption>

On a profité de notre première semaine pour poser les valises et découvrir Vancouver avec les enfants. Visite du centre-ville typiquement Nord-Américain, des dives et plages du détroit de Burrard et point de vue sur les fabuleux paysages naturels entourant Vancouver.

## Des vacances dans les vacances
Après ces quelques jours à Vancouver, nous sommes partis sur l'île de Vancouver, que nous avons parcouru de long en large en Van. Toute une épopée ! Autant pour l'incroyable confort de notre fourgon Ford super bien aménagé que pour l'énergie sans limite dont les enfants ont fait preuve durant nos trajets... Au total, des souvenirs inoubliables de Long Beach à Tofino...
![Markdowm Image]/assets/images/posts/IMG_6976.jpg]
<figcaption class="caption">Jericho beach</figcaption>

de Victoria et de notre tour en bateau pour aller voir les baleines, orques, phoques et éléphants de mer...
![Markdowm Image](assets/images/posts/IMG_6967.jpg)
<figcaption class="caption">Jericho beach</figcaption>

de la multitude de lacs à l'eau incroyablement limpide!
![Markdowm Image](assets/images/posts/IMG_7054.jpg)
<figcaption class="caption">Jericho beach</figcaption>

Et tout simplement de la pratique du camping dans les parcs provinciaux de la Colombie-Britannique, une expérience inoubliable avec ses feux de camps et grillades :)
![Markdowm Image](assets/images/posts/IMG_6935.jpg)
<figcaption class="caption">Jericho beach</figcaption>





On a profité de notre première semaine pour poser les valises et découvrir Vancouver avec les enfants. Visite du centre-ville typiquement Nord-Américain, des dives et plages du détroit de Burrard et point de vue sur les fabuleux paysages naturels entourant Vancouver.

This note **demonstrates** some of what [Markdown][1] is *capable of doing*.

And that's how to do it.

{% highlight html %}
This note **demonstrates** some of what [Markdown][some/link] is *capable of doing*.
{% endhighlight %}

---

## Headings

There are six levels of headings. They correspond with the six levels of HTML headings. You've probably noticed them already in the page. Each level down uses one more hash character. But we are using just 4 of them.

# Headings can be small

## Headings can be small

### Headings can be small

#### Headings can be small

{% highlight raw %}
# Heading
## Heading
### Heading
#### Heading
{% endhighlight %}

---

## Lists

### Ordered list

1. Item 1
2. A second item
3. Number 3

{% highlight raw %}
1. Item 1
2. A second item
3. Number 3
{% endhighlight %}

### Unordered list

* An item
* Another item
* Yet another item
* And there's more...

{% highlight raw %}
* An item
* Another item
* Yet another item
* And there's more...
{% endhighlight %}

---

## Paragraph modifiers

### Quote

> Here is a quote. What this is should be self explanatory. Quotes are automatically indented when they are used.

{% highlight raw %}
> Here is a quote. What this is should be self explanatory.
{% endhighlight raw %}

---

## URLs

URLs can be made in a handful of ways:

* A named link to [Mark It Down][3].
* Another named link to [Mark It Down](http://markitdown.net/)
* Sometimes you just want a URL like <http://markitdown.net/>.

{% highlight raw %}
* A named link to [MarkItDown][3].
* Another named link to [MarkItDown](http://markitdown.net/)
* Sometimes you just want a URL like <http://markitdown.net/>.
{% endhighlight %}

---

## Horizontal rule

A horizontal rule is a line that goes across the middle of the page.
It's sometimes handy for breaking things up.

{% highlight raw %}
---
{% endhighlight %}

---

## Images

Markdown can also contain images. I'll need to add something here sometime.

{% highlight raw %}
![Markdowm Image][/image/url]
{% endhighlight %}

![Markdowm Image][6]

*Figure Caption*?

{% highlight raw %}
![Markdowm Image][/image/url]
<figcaption class="caption">Photo by John Doe</figcaption>
{% endhighlight %}

![Markdowm Image][6]
<figcaption class="caption">Photo by John Doe</figcaption>

*Bigger Images*?

{% highlight raw %}
![Markdowm Image][/image/url]{: class="bigger-image" }
{% endhighlight %}

![Markdowm Image][6]{: class="bigger-image" }

---

## Code

A HTML Example:

{% highlight html %}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h1>Just a test</h1>
</body>
</html>
{% endhighlight %}

A CSS Example:

{% highlight css %}
pre {
    padding: 10px;
    font-size: .8em;
    white-space: pre;
}

pre, table {
    width: 100%;
}

code, pre, tt {
    font-family: Monaco, Consolas, Inconsolata, monospace, sans-serif;
    background: rgba(0,0,0,.05);
}
{% endhighlight %}

A JS Example:

{% highlight js %}
// Sticky Header
$(window).scroll(function() {

    if ($(window).scrollTop() > 900 && !$("body").hasClass('show-menu')) {
        $('#hamburguer__open').fadeOut('fast');
    } else if (!$("body").hasClass('show-menu')) {
        $('#hamburguer__open').fadeIn('fast');
    }

});
{% endhighlight %}

[1]: http://daringfireball.net/projects/markdown/
[2]: http://www.fileformat.info/info/unicode/char/2163/index.htm
[3]: http://www.markitdown.net/
[4]: http://daringfireball.net/projects/markdown/basics
[5]: http://daringfireball.net/projects/markdown/syntax
[6]: http://kune.fr/wp-content/uploads/2013/10/ghost-blog.jpg
