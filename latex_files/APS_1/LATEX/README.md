README for sttools, v2.0 2017/03/27

INTRODUCTION
============

It is a collection of macro packages historically placed in a bundle 
and maintained by Sigitas Tolušis.

PACKAGES
========

* cuted.sty, v1.5 2012/10/04:
  – puts some material page width wide at any place on twocolumn page
    with existing text reformatted under inserted material; 
  TODO: add optional rules to separate from text;

* floatpag.sty, v1.1 2012/05/29:
  – sets pagestyle for floats page;

* flushend.sty, v3.3 2017/03/27:
  – balances page in twocolumn mode;
   (2014/03/03): totally rewritten with new algorithm to support footnotes,
        top floats and column break before one line section title;
   (2014/04/24): bugfix version;
   (2015/04/08): bugfix version with improved funcionality:
                 - spreaded or fixed right column height;
                 - optional old algorithm for backward compatability;
   (2015/04/14): set debug option off by default; keeplastbox modified;
   (2016/06/21): bugfix compatibility with luatexja package;
   (2017/03/27): bugfix version with new options for some checks on/off;

* marginal.sty, v1.1 2012/05/29:
  – enlarges room for marginal inserts;
   (2016/06/28): removed from the bundle;

* midfloat.sty, v1.1 2012/05/29:
  – inserts onecolumn stuff in twocolumn page; 
  TODO: extend to work on both columns;

* stabular.sty, v2.0 2014/03/20:
  – modifies tabular environment; 
  (2014/03/20): removed extra stuff and left only possibility to break 
       on page boundary;
       added tabular variant from array package;

* stfloats.sty, v3.3 2017/03/27:
  – enriches floats output mechanism; 
   (2016/06/28): compatibility bugfix with 2015 latexrelease;
   (2017/03/27): compatibility bugfix with 2017-05-01 latexrelease;

* texsort.sty, v1.1 2012/05/29:
  - sorts numerical values;
  TODO: extend (rewrite) to support alphanumerical values 
        for sorting.

INSTALLATION
============

Install in a standard way as any other LaTeX macro package.

AUTHORS/MAINTAINER
==================

* Sigitas Tolušis
* Vytas Statulevičius (floatpag.sty)

DOCUMENTATION
=============

Please see the sttools.pdf for a package list in collection
and <package>.pdf for particular macro package.

LICENSE
=======

This work may be distributed and/or modified under the
conditions of the LaTeX Project Public License, either version 1.3
of this license or (at your option) any later version.
The latest version of this license is in
  http://www.latex-project.org/lppl.txt
and version 1.3 or later is part of all distributions of LaTeX
version 2005/12/01 or later.



