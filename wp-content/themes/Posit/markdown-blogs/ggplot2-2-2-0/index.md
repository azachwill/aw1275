---
title: ggplot2 2.2.0
authors: 
- Hadley Wickham
authormeta: hadley-wickham
date: '2016-11-14'
slug: ggplot2-2-2-0
events: blog
---

<blockquote>
<p class="body-md-regular body-sm-regular">
Please note that the information presented in this post reflects the package as it stood when initially released, and may now be outdated. For the most up-to-date information, kindly refer to <https://ggplot2.tidyverse.org/>.
</p>
</blockquote>

I'm very pleased to announce ggplot2 2.2.0. It includes four major new features:

  * Subtitles and captions.

  * A large rewrite of the facetting system.

  * Improved theme options.

  * Better stacking.

It also includes as numerous bug fixes and minor improvements, as described in the [release notes](http://github.com/hadley/ggplot2/releases/tag/v2.2.0).

The majority of this work was carried out by [Thomas Pederson](https://github.com/thomasp85), who I was lucky to have as my "ggplot2 intern" this summer. Make sure to check out his other visualisation packages: [ggraph](https://github.com/thomasp85/ggraph), [ggforce](https://github.com/thomasp85/ggforce), and [tweenr](https://github.com/thomasp85/tweenr).

Install ggplot2 with:

```{{r}}
install.packages("ggplot2")
```

## Subtitles and captions

Thanks to [Bob Rudis](https://rud.is/), you can now add subtitles and captions to your plots:

```{{r}}
ggplot(mpg, aes(displ, hwy)) +
  geom_point(aes(color = class)) +
  geom_smooth(se = FALSE, method = "loess") +
  labs(
    title = "Fuel efficiency generally decreases with engine size",
    subtitle = "Two seaters (sports cars) are an exception because of their light weight",
    caption = "Data from fueleconomy.gov"
  )
```

![subtitle-1](https://rstudioblog.files.wordpress.com/2016/11/subtitle-11.png)

These are controlled by the theme settings `plot.subtitle` and `plot.caption`.

The plot title is now aligned to the left by default. To return to the previous centered alignment, use `theme(plot.title = element_text(hjust = 0.5))`.

## Facets

The facet and layout implementation has been moved to ggproto and received a large rewrite and refactoring. This will allow others to create their own facetting systems, as descrbied in the `vignette("extending-ggplot2")`. Along with the rewrite a number of features and improvements has been added, most notably:

  * ou can now use functions in facetting formulas, thanks to [Dan Ruderman](https://github.com/DanRuderman).

```{{r}}
ggplot(diamonds, aes(carat, price)) +
  geom_hex(bins = 20) +
  facet_wrap(~cut_number(depth, 6))
```

![facet-1-1](https://rstudioblog.files.wordpress.com/2016/11/facet-1-1.png)

  * Axes are now drawn under the panels in `facet_wrap()` when the rentangle is not completely filled.

```{{r}}
ggplot(mpg, aes(displ, hwy)) +
  geom_point() +
  facet_wrap(~class)
```

![facet-2-1](https://rstudioblog.files.wordpress.com/2016/11/facet-2-1.png)

  * You can set the position of the axes with the `position` argument.

```{{r}}
ggplot(mpg, aes(displ, hwy)) +
  geom_point() +
  scale_x_continuous(position = "top") +
  scale_y_continuous(position = "right")
```

![facet-3-1](https://rstudioblog.files.wordpress.com/2016/11/facet-3-1.png)

  * You can display a secondary axis that is a one-to-one transformation of the primary axis with `sec.axis`.

```{{r}}
ggplot(mpg, aes(displ, hwy)) +
  geom_point() +
  scale_y_continuous(
    "mpg (US)",
    sec.axis = sec_axis(~ . * 1.20, name = "mpg (UK)")
  )
```

  * Strips can be placed on any side, and the placement with respect to axes can be controlled with the `strip.placement` theme option.

```{{r}}
ggplot(mpg, aes(displ, hwy)) +
  geom_point() +
  facet_wrap(~ drv, strip.position = "bottom") +
  theme(
    strip.placement = "outside",
    strip.background = element_blank(),
    strip.text = element_text(face = "bold")
  ) +
  xlab(NULL)
```

![facet-5-1](https://rstudioblog.files.wordpress.com/2016/11/facet-5-1.png)

## Theming

  * The `theme()` function now has named arguments so autocomplete and documentation suggestions are vastly improved.

  * Blank elements can now be overridden again so you get the expected behavior when setting e.g. `axis.line.x`.

  * `element_line()` gets an `arrow` argument that lets you put arrows on axes.

```{{r}}
arrow <- arrow(length = unit(0.4, "cm"), type = "closed")

ggplot(mpg, aes(displ, hwy)) +
  geom_point() +
  theme_minimal() +
  theme(
    axis.line = element_line(arrow = arrow)
  )
```

![theme-1-1](https://rstudioblog.files.wordpress.com/2016/11/theme-1-1.png)

  * Control of legend styling has been improved. The whole legend area can be aligned with the plot area and a box can be drawn around all legends:

```{{r}}
ggplot(mpg, aes(displ, hwy, shape = drv, colour = fl)) +
  geom_point() +
  theme(
    legend.justification = "top",
    legend.box = "horizontal",
    legend.box.margin = margin(3, 3, 3, 3, "mm"),
    legend.margin = margin(),
    legend.box.background = element_rect(colour = "grey50")
  )
```

![theme-2-1](https://rstudioblog.files.wordpress.com/2016/11/theme-2-1.png)

  * `panel.margin` and `legend.margin` have been renamed to `panel.spacing` and `legend.spacing` respectively, as this better indicates their roles. A new `legend.margin` actually controls the margin around each legend.

  * When computing the height of titles, ggplot2 now inclues the height of the descenders (i.e. the bits `g` and `y` that hang underneath). This improves the margins around titles, particularly the y axis label. I have also very slightly increased the inner margins of axis titles, and removed the outer margins.

  * The default themes has been tweaked by [Jean-Olivier Irisson](http://www.obs-vlfr.fr/~irisson/) making them better match `theme_grey()`.

## Stacking bars

`position_stack()` and `position_fill()` now stack values in the reverse order of the grouping, which makes the default stack order match the legend.

```{{r}}
avg_price <- diamonds %>%
  group_by(cut, color) %>%
  summarise(price = mean(price)) %>%
  ungroup() %>%
  mutate(price_rel = price - mean(price))

ggplot(avg_price) +
  geom_col(aes(x = cut, y = price, fill = color))
```

![stack-1-1](https://rstudioblog.files.wordpress.com/2016/11/stack-1-1.png)

(Note also the new `geom_col()` which is short-hand for `geom_bar(stat = "identity")`, contributed by Bob Rudis.)

If you want to stack in the opposite order, try [`forcats::fct_rev()`](http://forcats.tidyverse.org/reference/fct_rev.html):

```{{r}}
ggplot(avg_price) +
  geom_col(aes(x = cut, y = price, fill = fct_rev(color)))
```

![stack-2-1](https://rstudioblog.files.wordpress.com/2016/11/stack-2-1.png)

Additionally, you can now stack negative values:

```{{r}}
ggplot(avg_price) +
  geom_col(aes(x = cut, y = price_rel, fill = color))
```

![stack-3-1](https://rstudioblog.files.wordpress.com/2016/11/stack-3-1.png)

The overall ordering cannot necessarily be matched in the presence of negative values, but the ordering on either side of the x-axis will match.

Labels can also be stacked, but the default position is suboptimal:

```{{r}}
series <- data.frame(
  time = c(rep(1, 4),rep(2, 4), rep(3, 4), rep(4, 4)),
  type = rep(c('a', 'b', 'c', 'd'), 4),
  value = rpois(16, 10)
)

ggplot(series, aes(time, value, group = type)) +
  geom_area(aes(fill = type)) +
  geom_text(aes(label = type), position = "stack")
```

![stack-4-1](https://rstudioblog.files.wordpress.com/2016/11/stack-4-1.png)

You can improve the position with the `vjust` parameter. A `vjust` of 0.5 will center the labels inside the corresponding area:

```{{r}}
ggplot(series, aes(time, value, group = type)) +
  geom_area(aes(fill = type)) +
  geom_text(aes(label = type), position = position_stack(vjust = 0.5))
```

![stack-5-1](https://rstudioblog.files.wordpress.com/2016/11/stack-5-1.png)

