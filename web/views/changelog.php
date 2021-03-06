<?php $title = '<a href="/">Transvision</a> changelog'; ?>

<h2 id="v2.2">Version 2.2 - 2013-02-28</h2>

<h3>End user visible changes</h3>
<ul>
    <li>Selected search type value (strings, entities, strings and entities) is kept after a search.</li>
    <li>Searches with slashes in the middle of strings now work</li>
    <li>Fixed a bug in the cron job script that resulted in mozilla-central strings to not be extracted</li>
</ul>

<h3>Other changes</h3>
<ul>
    <li>Cron job is now ran twice a day instead of once, at 2AM CET and 2PM CET</li>
    <li>Stats page now lists type of string searches and repos. All stats reset to zero.</li>
</ul>

<h2 id="v2.1">Version 2.1 - 2013-01-30</h2>

<h3>End user visible changes</h3>
<ul>
    <li><strong>New feature:</strong> New select box option to search in strings, entities, or both strings and entities.</li>
    <li><strong>New feature:</strong> typography hint, if a sentence ends with a dot and your translation doesn't, there is a small "No final dot?" warning below the string.</li>
    <li>Missing translated strings are marked as such instead of just having an empty cell.</li>
    <li>Repositories and search targets are now select boxes.</li>
    <li>Advanced regular expression search options are now separated from other search options.</li>
    <li>Glossary search is now a separate view linked in the footer.</li>
    <li>Improved highlighting of search results.</li>
    <li>Fixed some bugs on "perfect match" searches.</li>
    <li>Search results now limited to 200 results to avoid hanging the browser if we send back megabytesof data.</li>
    <li>Added Aragonese</li>
</ul>

<h3>Other changes</h3>
<ul>
    <li>Added a <a href="/credits/">credits</a> page.</li>
    <li>Added a counter for the use of search options to check if some options are unused and could be removed.</li>
</ul>

<h2 id="v2.0">Version 2.0 - 2013-01-18</h2>

<h3>End user visible changes</h3>
<ul>
    <li><strong>New feature:</strong> In search results, there is now a <em>source</em> link next to the original string and your translation, this links to the file on hg.mozilla.org, this way you can find easily where the file to edit is.</li>
    <li>The entity names in the first column now longer link to a search for the English file on mxr now that we have proper link support to the source file.</li>
    <li>Searches containing a slash (/) now have results.</li>
    <li>Manifest.properties files containing name and description od apps in the Gaia repo are now shown in search results.</li>
    <li>A regression on the Glossary search is fixed, it is now again yielding results.</li>
</ul>

<h3>Other changes</h3>
<ul>
    <li>Transvision jumps from version 1.9 to version 2.0 (and not 1.10), this is partly because the addition of source strings was significant development work which involved data structure changes and partly because I don't want to end up with a version 1.230 at some point ;).</li>
    <li>The <a href="/stats/">statistics page</a> view added last week now sorts locales per number of requests and gives totals of searches and locales.</li>
</ul>

<h2 id="v1.9">Version 1.9 - 2013-01-11</h2>

<h3>End user visible changes</h3>
<ul>
    <li>Searches including  special characters such as [, (, { are now possible (useful for plurals in Gaia entities, replacement variables in Gais strings or output of messages containing function names in developer tools) </li>
    <li>Occitan locale added</li>

</ul>

<h3>Code changes</h3>
<ul>
    <li>PHP: Monolog library updated to 1.3.0</li>
    <li>Python: Silme library updated to 0.8.1</li>
    <li>fixed an error in Setup shell script</li>
    <li>Move classes to a Transvision namespace</li>
</ul>

<h3>Other changes</h3>
<ul>
    <li>New short <a href="/stats/">statistics page</a> showing which locales use Transvision</li>
</ul>

<h2 id="v1.8">Version 1.8 - 2013-01-04</h2>

<h3>End user visible changes</h3>
<ul>
    <li>Searches need to be at least 2 characters long, single letter searches now return an error message.</li>
    <li>Style improvements to search forms and the template for better clarity.</li>
</ul>

<h3>Other changes</h3>
<ul>
    <li>External dependencies are now all managed through <a href="http://getcomposer.org/">Composer</a></li>
    <li>Added Monolog library to be able to log events related to debugging or the use of the application (/ex: which locales actually do use Transvision)</li>
</ul>

<h2 id="v1.7">Version 1.7 - 2012-10-24</h2>
<h3>End user visible changes</h3>
<ul>
    <li><strong>New experimental feature:</strong> You can now see all the translated <a href="/accesskeys/">access keys</a> that are potentially wrong for your locale. If you see a redish square next to your access key letter such as this one&nbsp;: <span class="highlight-red">&nbsp;</span>, it means that there is a space in your string and the access key may not work.</li>
    <li>Access keys are now part of search results</li>
    <li>Experimental views are now linked in the footer of the site</li>
</ul>
<h3>Developer visible changes</h3>
<ul>
    <li>Fixed a regression on the JSON api results (double quotes no longer escaped and breaking JSON format).</li>
    <li>Added back proper JSONP support activated with the <var>callback</var> GET parameter, sent with the  application/javascript Mime type.</li>
</ul>
<h2 id="v1.6">Version 1.6 - 2012-10-18</h2>
<h3>End user visible changes</h3>
<ul>
    <li><strong>New experimental feature:</strong> You can now compare differences in your translations across channels (central, aurora, beta, release) on this page <a href="/channelcomparison/">Channel to Channel differences</a></li>
    <li>Thunderbird's Chat strings are now included.</li>
    <li>Mozilla Central is now the default repo for searches (instead of Release)</li>
    <li>Removed regular expression searches to unclutter the search panel (Wildcard and case sensitive are still there)</li>
    <li>Fixed a bug in causing the loss of the source locale for Spanish when switching from a search on Gaia to a search on comm/moz-central repos</li>
</ul>

<h3>Other changes</h3>
<ul>
    <li>Lots of refactoring, the code is now stable enough to experiment with new views such as the Channel to Channel comparison page, with little to no impact on the main search feature for the application. That should allow specific views per locale and experiments.</li>
</ul>

<h2 id="v1.5">Version 1.5 - 2012-10-02</h2>
<h3>End user visible changes</h3>
<ul>
    <li><strong>New feature:</strong> Gaia strings are now included and merged with your repos. You can also do searches for the Gaia repo only</li>
    <li>Results are more accurate, specifically, identical strings between gecko apps are always shown.</li>
    <li>Ellipsis are shown with a gray background, thin spaces with a red background, thin spaces and non-breakable spaces have a tooltip to distinguish them (those changes are mostly helpers for French typography rules).</li>
</ul>
<h3>Developer visible changes</h3>
<ul>
    <li>The json api now returns <code>[]</code> instead of <code>null</code> if the search yields no result.</li>
</ul>
<h3>Other changes</h3>
<ul>
    <li>There is now a Transvision Beta server at <a href="http://transvision-beta.mozfr.org">transvision-beta.mozfr.org</a>, if you find a bug or a regression on Transvision, please check on this beta server that the bug you want to report is not already fixed.</li>
    <li>Set up a basic url front controller to be able to use the new PHP 5.4 integrated web server for development and also installed the Atoum Unit Test framework.</li>
    <li>Now with the MozFR favicon :)</li>
</ul>
<h2 id="v1.4">Version 1.4 - 2012-09-04</h2>
<h3>End user visible changes</h3>
<ul>
    <li><strong>New feature:</strong> locale to locale comparison. There is now two locale switchers, the source and the target one. By default, the source is en-US and the target is your detected locale code. You can manually set a different source than en-US so as to compare your translations with another locale. Note that the search results will be limited to the amount of translated strings in the source locale.</li>
    <li>Strings in MXR searches are now truncated if they exceed MXR's field length limits, it prevents an MXR error message and usually gives good search results</li>
    <li>The second table of results was showing the translation in both columns, this regression is fixed.</li>
</ul>

<h3>Other changes</h3>
<ul>
    <li>The cron job updating the repositories on MozFR server was not behaving correctly and repos were not updated in the last week, this is now fixed</li>
</ul>


<h2 id="v1.3">Version 1.3 - 2012-08-17</h2>
<h3>End user visible changes</h3>
<ul>
    <li>Strings in .ini and .inc files are now also in results</li>
    <li>Non-breakable spaces are shown with a gray background in search results, this is useful for languages like French that have punctuation rules stating that some puntuation signs (?!;«») should stick to the previous word but with a spacing.</li>
    <li>Entity search was not searching into all available entities (only about 60% of them), fixed</li>
    <li>Experimental: link English strings to a google translate search</li>
    <li>Visual update of search results</li>
</ul>

<h3>Other changes</h3>
<ul>
    <li>The suite/debugQA strings in English are no longer extracted  because they are not meant to be translated (<a href="https://bugzilla.mozilla.org/show_bug.cgi?id=782243">bug 782243</a>)</li>
</ul>

<h2 id="v1.2">Version 1.2 - 2012-08-10</h2>
<h3>End user visible changes</h3>
<ul>
    <li>Searches for strings with single and double quotes work ex: <a href="/?locale=fr&amp;repo=release&amp;recherche=Don't">Search for « Don't »</a></li>
    <li>The <em>Glossary</em> option now yields results that make sense, when you select it all other checkboxes are unselected, ex: <a href="/?locale=fr&amp;repo=release&amp;t2t=t2t&amp;recherche=bookmarks">Search for « Bookmarks »</a>. <br/>That option looks for the closest matches for your locale for a word or a few workd and lists them all. It also lists examples of use. The main use for that is to quickly check how a word is usually translated by your team.</li>
    <li><em>Perfect Match</em> option now actually works</li>
    <li>Changelog page uses the same template as the application</li>
</ul>

<h3>Developer visible changes</h3>
<ul>
    <li>json webservice is now available from a normal search if you add <code>&amp;json</code> to your search query (webservice.php is still available so as to not break API consumers, please udate your script to use <code>index.php?json</code> instead. ex: <a href="/?locale=fr&amp;repo=release&amp;recherche=Don't&amp;json">Search for « Don't »</a></li>
</ul>

<h3>Other changes</h3>
<ul>
    <li>Simplification of the python script creating TMX files</li>
    <li>Overall simplification of the PHP code to remove dead code</li>
</ul>

<h2 id="v1.1">Version 1.1 - 2012-08-01</h2>
<h3>End user visible changes</h3>
<ul>
    <li>added ach, ff, lij, my, wo locales</li>
    <li>removed oc, mn locales</li>
    <li>results for rtl locales are now correctly aligned</li>
    <li>added locale detection to populate the default locale on home page</li>
    <li>Radio buttons are now clickable</li>
    <li>cleaned up template to hopefully look better and be more readable</li>
</ul>

<h3>Developer visible changes</h3>
<ul>
    <li>json webservice now sends results with application/json Mime type instead of text/html</li>
    <li>install script setup.sh decoupled from glossaire.sh which updates an existing installation</li>
</ul>

<h3>Other changes</h3>
<ul>
    <li>Lots of code clean ups and simplifications</li>
</ul>

<h2 id="v1.0">Version 1.0 - 2012-07-27</h2>
<ul>
    <li>Initial import of existing code into github and reinstalling on MozFR server</li>
    <li>New URL is <a href="http://transvision.mozfr.org">http://transvision.mozfr.org</a></li>
</ul>


