




<!DOCTYPE html>
<html class="   ">
  <head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# object: http://ogp.me/ns/object# article: http://ogp.me/ns/article# profile: http://ogp.me/ns/profile#">
    <meta charset='utf-8'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    
    <title>GifCreator/src/GifCreator/GifCreator.php at master · Sybio/GifCreator</title>
    <link rel="search" type="application/opensearchdescription+xml" href="/opensearch.xml" title="GitHub" />
    <link rel="fluid-icon" href="https://github.com/fluidicon.png" title="GitHub" />
    <link rel="apple-touch-icon" sizes="57x57" href="/apple-touch-icon-114.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-touch-icon-114.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-touch-icon-144.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-touch-icon-144.png" />
    <meta property="fb:app_id" content="1401488693436528"/>

      <meta content="@github" name="twitter:site" /><meta content="summary" name="twitter:card" /><meta content="Sybio/GifCreator" name="twitter:title" /><meta content="GifCreator is a PHP class that creates animated GIF from multiple images" name="twitter:description" /><meta content="https://avatars3.githubusercontent.com/u/1507731?s=400" name="twitter:image:src" />
<meta content="GitHub" property="og:site_name" /><meta content="object" property="og:type" /><meta content="https://avatars3.githubusercontent.com/u/1507731?s=400" property="og:image" /><meta content="Sybio/GifCreator" property="og:title" /><meta content="https://github.com/Sybio/GifCreator" property="og:url" /><meta content="GifCreator is a PHP class that creates animated GIF from multiple images" property="og:description" />

    <link rel="assets" href="https://assets-cdn.github.com/">
    <link rel="conduit-xhr" href="https://ghconduit.com:25035">
    <link rel="xhr-socket" href="/_sockets" />

    <meta name="msapplication-TileImage" content="/windows-tile.png" />
    <meta name="msapplication-TileColor" content="#ffffff" />
    <meta name="selected-link" value="repo_source" data-pjax-transient />
      <meta name="google-analytics" content="UA-3769691-2">

    <meta content="collector.githubapp.com" name="octolytics-host" /><meta content="collector-cdn.github.com" name="octolytics-script-host" /><meta content="github" name="octolytics-app-id" /><meta content="7B746008:6288:7E04D83:539FD615" name="octolytics-dimension-request_id" /><meta content="4223136" name="octolytics-actor-id" /><meta content="zhiwuba" name="octolytics-actor-login" /><meta content="82e7b57837357628ab21b8049f734e7e01362ddbd166930d241ec696aaab99d7" name="octolytics-actor-hash" />
    

    
    
    <link rel="icon" type="image/x-icon" href="https://assets-cdn.github.com/favicon.ico" />


    <meta content="authenticity_token" name="csrf-param" />
<meta content="lxFczzx4wZJhJNnFvRID1WVNlU8/pDXqCjL9zaYN41jr8s34+de27nFJNuEYD9aAcjyJCZJtd6Zx4jNNwn85+Q==" name="csrf-token" />

    <link href="https://assets-cdn.github.com/assets/github-bcdb9eb20e01413e751df455ef4c7bf63158bec4.css" media="all" rel="stylesheet" type="text/css" />
    <link href="https://assets-cdn.github.com/assets/github2-865c542be0494c5159df67fcf0360476c2b51cf0.css" media="all" rel="stylesheet" type="text/css" />
    


    <meta http-equiv="x-pjax-version" content="93175cfd84f6de4e4347bc8e4eb6bfc3">

      
  <meta name="description" content="GifCreator is a PHP class that creates animated GIF from multiple images" />

  <meta content="1507731" name="octolytics-dimension-user_id" /><meta content="Sybio" name="octolytics-dimension-user_login" /><meta content="5947726" name="octolytics-dimension-repository_id" /><meta content="Sybio/GifCreator" name="octolytics-dimension-repository_nwo" /><meta content="true" name="octolytics-dimension-repository_public" /><meta content="false" name="octolytics-dimension-repository_is_fork" /><meta content="5947726" name="octolytics-dimension-repository_network_root_id" /><meta content="Sybio/GifCreator" name="octolytics-dimension-repository_network_root_nwo" />
  <link href="https://github.com/Sybio/GifCreator/commits/master.atom" rel="alternate" title="Recent Commits to GifCreator:master" type="application/atom+xml" />

  </head>


  <body class="logged_in  env-production windows vis-public page-blob">
    <a href="#start-of-content" tabindex="1" class="accessibility-aid js-skip-to-content">Skip to content</a>
    <div class="wrapper">
      
      
      
      


      <div class="header header-logged-in true">
  <div class="container clearfix">

    <a class="header-logo-invertocat" href="https://github.com/" aria-label="Homepage">
  <span class="mega-octicon octicon-mark-github"></span>
</a>


    
    <a href="/notifications" aria-label="You have no unread notifications" class="notification-indicator tooltipped tooltipped-s" data-hotkey="g n">
        <span class="mail-status all-read"></span>
</a>

      <div class="command-bar js-command-bar  in-repository">
          <form accept-charset="UTF-8" action="/search" class="command-bar-form" id="top_search_form" method="get">

<div class="commandbar">
  <span class="message"></span>
  <input type="text" data-hotkey="s, /" name="q" id="js-command-bar-field" placeholder="Search or type a command" tabindex="1" autocapitalize="off"
    
    data-username="zhiwuba"
      data-repo="Sybio/GifCreator"
      data-branch="master"
      data-sha="8715b2826cad8c8ac0118e9d10e3898b7ddff4b4"
  >
  <div class="display hidden"></div>
</div>

    <input type="hidden" name="nwo" value="Sybio/GifCreator" />

    <div class="select-menu js-menu-container js-select-menu search-context-select-menu">
      <span class="minibutton select-menu-button js-menu-target" role="button" aria-haspopup="true">
        <span class="js-select-button">This repository</span>
      </span>

      <div class="select-menu-modal-holder js-menu-content js-navigation-container" aria-hidden="true">
        <div class="select-menu-modal">

          <div class="select-menu-item js-navigation-item js-this-repository-navigation-item selected">
            <span class="select-menu-item-icon octicon octicon-check"></span>
            <input type="radio" class="js-search-this-repository" name="search_target" value="repository" checked="checked" />
            <div class="select-menu-item-text js-select-button-text">This repository</div>
          </div> <!-- /.select-menu-item -->

          <div class="select-menu-item js-navigation-item js-all-repositories-navigation-item">
            <span class="select-menu-item-icon octicon octicon-check"></span>
            <input type="radio" name="search_target" value="global" />
            <div class="select-menu-item-text js-select-button-text">All repositories</div>
          </div> <!-- /.select-menu-item -->

        </div>
      </div>
    </div>

  <span class="help tooltipped tooltipped-s" aria-label="Show command bar help">
    <span class="octicon octicon-question"></span>
  </span>


  <input type="hidden" name="ref" value="cmdform">

</form>
        <ul class="top-nav">
          <li class="explore"><a href="/explore">Explore</a></li>
            <li><a href="https://gist.github.com">Gist</a></li>
            <li><a href="/blog">Blog</a></li>
          <li><a href="https://help.github.com">Help</a></li>
        </ul>
      </div>

    


  <ul id="user-links">
    <li>
      <a href="/zhiwuba" class="name">
        <img alt="zhiwuba" class=" js-avatar" data-user="4223136" height="20" src="https://avatars3.githubusercontent.com/u/4223136?s=140" width="20" /> zhiwuba
      </a>
    </li>

    <li class="new-menu dropdown-toggle js-menu-container">
      <a href="#" class="js-menu-target tooltipped tooltipped-s" aria-label="Create new...">
        <span class="octicon octicon-plus"></span>
        <span class="dropdown-arrow"></span>
      </a>

      <div class="new-menu-content js-menu-content">
      </div>
    </li>

    <li>
      <a href="/settings/profile" id="account_settings"
        class="tooltipped tooltipped-s"
        aria-label="Account settings ">
        <span class="octicon octicon-tools"></span>
      </a>
    </li>
    <li>
      <form class="logout-form" action="/logout" method="post">
        <button class="sign-out-button tooltipped tooltipped-s" aria-label="Sign out">
          <span class="octicon octicon-sign-out"></span>
        </button>
      </form>
    </li>

  </ul>

<div class="js-new-dropdown-contents hidden">
  

<ul class="dropdown-menu">
  <li>
    <a href="/new"><span class="octicon octicon-repo"></span> New repository</a>
  </li>
  <li>
    <a href="/organizations/new"><span class="octicon octicon-organization"></span> New organization</a>
  </li>


    <li class="section-title">
      <span title="Sybio/GifCreator">This repository</span>
    </li>
      <li>
        <a href="/Sybio/GifCreator/issues/new"><span class="octicon octicon-issue-opened"></span> New issue</a>
      </li>
</ul>

</div>


    
  </div>
</div>

      

        



      <div id="start-of-content" class="accessibility-aid"></div>
          <div class="site" itemscope itemtype="http://schema.org/WebPage">
    <div id="js-flash-container">
      
    </div>
    <div class="pagehead repohead instapaper_ignore readability-menu">
      <div class="container">
        

<ul class="pagehead-actions">

    <li class="subscription">
      <form accept-charset="UTF-8" action="/notifications/subscribe" class="js-social-container" data-autosubmit="true" data-remote="true" method="post"><div style="margin:0;padding:0;display:inline"><input name="authenticity_token" type="hidden" value="bonQjulXIZ7W2/v2FvzqqOuUdUF9OUAf1sGa+JxByRzw3FnHMM5RazzLBLmpmG2DatcbZzwEO4wA4whmTdN6qA==" /></div>  <input id="repository_id" name="repository_id" type="hidden" value="5947726" />

    <div class="select-menu js-menu-container js-select-menu">
      <a class="social-count js-social-count" href="/Sybio/GifCreator/watchers">
        6
      </a>
      <span class="minibutton select-menu-button with-count js-menu-target" role="button" tabindex="0" aria-haspopup="true">
        <span class="js-select-button">
          <span class="octicon octicon-eye"></span>
          Watch
        </span>
      </span>

      <div class="select-menu-modal-holder">
        <div class="select-menu-modal subscription-menu-modal js-menu-content" aria-hidden="true">
          <div class="select-menu-header">
            <span class="select-menu-title">Notification status</span>
            <span class="octicon octicon-x js-menu-close"></span>
          </div> <!-- /.select-menu-header -->

          <div class="select-menu-list js-navigation-container" role="menu">

            <div class="select-menu-item js-navigation-item selected" role="menuitem" tabindex="0">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <div class="select-menu-item-text">
                <input checked="checked" id="do_included" name="do" type="radio" value="included" />
                <h4>Not watching</h4>
                <span class="description">You only receive notifications for conversations in which you participate or are @mentioned.</span>
                <span class="js-select-button-text hidden-select-button-text">
                  <span class="octicon octicon-eye"></span>
                  Watch
                </span>
              </div>
            </div> <!-- /.select-menu-item -->

            <div class="select-menu-item js-navigation-item " role="menuitem" tabindex="0">
              <span class="select-menu-item-icon octicon octicon octicon-check"></span>
              <div class="select-menu-item-text">
                <input id="do_subscribed" name="do" type="radio" value="subscribed" />
                <h4>Watching</h4>
                <span class="description">You receive notifications for all conversations in this repository.</span>
                <span class="js-select-button-text hidden-select-button-text">
                  <span class="octicon octicon-eye"></span>
                  Unwatch
                </span>
              </div>
            </div> <!-- /.select-menu-item -->

            <div class="select-menu-item js-navigation-item " role="menuitem" tabindex="0">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <div class="select-menu-item-text">
                <input id="do_ignore" name="do" type="radio" value="ignore" />
                <h4>Ignoring</h4>
                <span class="description">You do not receive any notifications for conversations in this repository.</span>
                <span class="js-select-button-text hidden-select-button-text">
                  <span class="octicon octicon-mute"></span>
                  Stop ignoring
                </span>
              </div>
            </div> <!-- /.select-menu-item -->

          </div> <!-- /.select-menu-list -->

        </div> <!-- /.select-menu-modal -->
      </div> <!-- /.select-menu-modal-holder -->
    </div> <!-- /.select-menu -->

</form>
    </li>

  <li>
    

  <div class="js-toggler-container js-social-container starring-container ">

    <form accept-charset="UTF-8" action="/Sybio/GifCreator/unstar" class="js-toggler-form starred" data-remote="true" method="post"><div style="margin:0;padding:0;display:inline"><input name="authenticity_token" type="hidden" value="kkZk2XKFI9Hk1vlGpPRkNPStuwDZOnSM82TXqZse4LShjzzimI00j+LCl21cEm+L04LuT5CdCUuX0v+FiddbgQ==" /></div>
      <button
        class="minibutton with-count js-toggler-target star-button"
        aria-label="Unstar this repository" title="Unstar Sybio/GifCreator">
        <span class="octicon octicon-star"></span>
        Unstar
      </button>
        <a class="social-count js-social-count" href="/Sybio/GifCreator/stargazers">
          51
        </a>
</form>
    <form accept-charset="UTF-8" action="/Sybio/GifCreator/star" class="js-toggler-form unstarred" data-remote="true" method="post"><div style="margin:0;padding:0;display:inline"><input name="authenticity_token" type="hidden" value="32pNF94WEyh8Rpwl3pKDNbCA0AZN7dzTAA5Q/uT31O7PFIkBdTsTlnBht9PcVyGhhHl5OXK5HG2VrUiIU/KgEQ==" /></div>
      <button
        class="minibutton with-count js-toggler-target star-button"
        aria-label="Star this repository" title="Star Sybio/GifCreator">
        <span class="octicon octicon-star"></span>
        Star
      </button>
        <a class="social-count js-social-count" href="/Sybio/GifCreator/stargazers">
          51
        </a>
</form>  </div>

  </li>


        <li>
          <a href="/Sybio/GifCreator/fork" class="minibutton with-count js-toggler-target fork-button lighter tooltipped-n" title="Fork your own copy of Sybio/GifCreator to your account" aria-label="Fork your own copy of Sybio/GifCreator to your account" rel="nofollow" data-method="post">
            <span class="octicon octicon-repo-forked"></span>
            Fork
          </a>
          <a href="/Sybio/GifCreator/network" class="social-count">15</a>
        </li>

</ul>

        <h1 itemscope itemtype="http://data-vocabulary.org/Breadcrumb" class="entry-title public">
          <span class="repo-label"><span>public</span></span>
          <span class="mega-octicon octicon-repo"></span>
          <span class="author"><a href="/Sybio" class="url fn" itemprop="url" rel="author"><span itemprop="title">Sybio</span></a></span><!--
       --><span class="path-divider">/</span><!--
       --><strong><a href="/Sybio/GifCreator" class="js-current-repository js-repo-home-link">GifCreator</a></strong>

          <span class="page-context-loader">
            <img alt="" height="16" src="https://assets-cdn.github.com/images/spinners/octocat-spinner-32.gif" width="16" />
          </span>

        </h1>
      </div><!-- /.container -->
    </div><!-- /.repohead -->

    <div class="container">
      <div class="repository-with-sidebar repo-container new-discussion-timeline js-new-discussion-timeline  ">
        <div class="repository-sidebar clearfix">
            

<div class="sunken-menu vertical-right repo-nav js-repo-nav js-repository-container-pjax js-octicon-loaders">
  <div class="sunken-menu-contents">
    <ul class="sunken-menu-group">
      <li class="tooltipped tooltipped-w" aria-label="Code">
        <a href="/Sybio/GifCreator" aria-label="Code" class="selected js-selected-navigation-item sunken-menu-item" data-hotkey="g c" data-pjax="true" data-selected-links="repo_source repo_downloads repo_commits repo_releases repo_tags repo_branches /Sybio/GifCreator">
          <span class="octicon octicon-code"></span> <span class="full-word">Code</span>
          <img alt="" class="mini-loader" height="16" src="https://assets-cdn.github.com/images/spinners/octocat-spinner-32.gif" width="16" />
</a>      </li>

        <li class="tooltipped tooltipped-w" aria-label="Issues">
          <a href="/Sybio/GifCreator/issues" aria-label="Issues" class="js-selected-navigation-item sunken-menu-item js-disable-pjax" data-hotkey="g i" data-selected-links="repo_issues /Sybio/GifCreator/issues">
            <span class="octicon octicon-issue-opened"></span> <span class="full-word">Issues</span>
            <span class='counter'>3</span>
            <img alt="" class="mini-loader" height="16" src="https://assets-cdn.github.com/images/spinners/octocat-spinner-32.gif" width="16" />
</a>        </li>

      <li class="tooltipped tooltipped-w" aria-label="Pull Requests">
        <a href="/Sybio/GifCreator/pulls" aria-label="Pull Requests" class="js-selected-navigation-item sunken-menu-item js-disable-pjax" data-hotkey="g p" data-selected-links="repo_pulls /Sybio/GifCreator/pulls">
            <span class="octicon octicon-git-pull-request"></span> <span class="full-word">Pull Requests</span>
            <span class='counter'>2</span>
            <img alt="" class="mini-loader" height="16" src="https://assets-cdn.github.com/images/spinners/octocat-spinner-32.gif" width="16" />
</a>      </li>


        <li class="tooltipped tooltipped-w" aria-label="Wiki">
          <a href="/Sybio/GifCreator/wiki" aria-label="Wiki" class="js-selected-navigation-item sunken-menu-item js-disable-pjax" data-hotkey="g w" data-selected-links="repo_wiki /Sybio/GifCreator/wiki">
            <span class="octicon octicon-book"></span> <span class="full-word">Wiki</span>
            <img alt="" class="mini-loader" height="16" src="https://assets-cdn.github.com/images/spinners/octocat-spinner-32.gif" width="16" />
</a>        </li>
    </ul>
    <div class="sunken-menu-separator"></div>
    <ul class="sunken-menu-group">

      <li class="tooltipped tooltipped-w" aria-label="Pulse">
        <a href="/Sybio/GifCreator/pulse" aria-label="Pulse" class="js-selected-navigation-item sunken-menu-item" data-pjax="true" data-selected-links="pulse /Sybio/GifCreator/pulse">
          <span class="octicon octicon-pulse"></span> <span class="full-word">Pulse</span>
          <img alt="" class="mini-loader" height="16" src="https://assets-cdn.github.com/images/spinners/octocat-spinner-32.gif" width="16" />
</a>      </li>

      <li class="tooltipped tooltipped-w" aria-label="Graphs">
        <a href="/Sybio/GifCreator/graphs" aria-label="Graphs" class="js-selected-navigation-item sunken-menu-item" data-pjax="true" data-selected-links="repo_graphs repo_contributors /Sybio/GifCreator/graphs">
          <span class="octicon octicon-graph"></span> <span class="full-word">Graphs</span>
          <img alt="" class="mini-loader" height="16" src="https://assets-cdn.github.com/images/spinners/octocat-spinner-32.gif" width="16" />
</a>      </li>

      <li class="tooltipped tooltipped-w" aria-label="Network">
        <a href="/Sybio/GifCreator/network" aria-label="Network" class="js-selected-navigation-item sunken-menu-item js-disable-pjax" data-selected-links="repo_network /Sybio/GifCreator/network">
          <span class="octicon octicon-repo-forked"></span> <span class="full-word">Network</span>
          <img alt="" class="mini-loader" height="16" src="https://assets-cdn.github.com/images/spinners/octocat-spinner-32.gif" width="16" />
</a>      </li>
    </ul>


  </div>
</div>

              <div class="only-with-full-nav">
                

  

<div class="clone-url open"
  data-protocol-type="http"
  data-url="/users/set_protocol?protocol_selector=http&amp;protocol_type=clone">
  <h3><strong>HTTPS</strong> clone URL</h3>
  <div class="clone-url-box">
    <input type="text" class="clone js-url-field"
           value="https://github.com/Sybio/GifCreator.git" readonly="readonly">
    <span class="url-box-clippy">
    <button aria-label="copy to clipboard" class="js-zeroclipboard minibutton zeroclipboard-button" data-clipboard-text="https://github.com/Sybio/GifCreator.git" data-copied-hint="copied!" type="button"><span class="octicon octicon-clippy"></span></button>
    </span>
  </div>
</div>

  

<div class="clone-url "
  data-protocol-type="ssh"
  data-url="/users/set_protocol?protocol_selector=ssh&amp;protocol_type=clone">
  <h3><strong>SSH</strong> clone URL</h3>
  <div class="clone-url-box">
    <input type="text" class="clone js-url-field"
           value="git@github.com:Sybio/GifCreator.git" readonly="readonly">
    <span class="url-box-clippy">
    <button aria-label="copy to clipboard" class="js-zeroclipboard minibutton zeroclipboard-button" data-clipboard-text="git@github.com:Sybio/GifCreator.git" data-copied-hint="copied!" type="button"><span class="octicon octicon-clippy"></span></button>
    </span>
  </div>
</div>

  

<div class="clone-url "
  data-protocol-type="subversion"
  data-url="/users/set_protocol?protocol_selector=subversion&amp;protocol_type=clone">
  <h3><strong>Subversion</strong> checkout URL</h3>
  <div class="clone-url-box">
    <input type="text" class="clone js-url-field"
           value="https://github.com/Sybio/GifCreator" readonly="readonly">
    <span class="url-box-clippy">
    <button aria-label="copy to clipboard" class="js-zeroclipboard minibutton zeroclipboard-button" data-clipboard-text="https://github.com/Sybio/GifCreator" data-copied-hint="copied!" type="button"><span class="octicon octicon-clippy"></span></button>
    </span>
  </div>
</div>


<p class="clone-options">You can clone with
      <a href="#" class="js-clone-selector" data-protocol="http">HTTPS</a>,
      <a href="#" class="js-clone-selector" data-protocol="ssh">SSH</a>,
      or <a href="#" class="js-clone-selector" data-protocol="subversion">Subversion</a>.
  <a href="https://help.github.com/articles/which-remote-url-should-i-use" class="help tooltipped tooltipped-n" aria-label="Get help on which URL is right for you.">
    <span class="octicon octicon-question"></span>
  </a>
</p>


  <a href="github-windows://openRepo/https://github.com/Sybio/GifCreator" class="minibutton sidebar-button" title="Save Sybio/GifCreator to your computer and use it in GitHub Desktop." aria-label="Save Sybio/GifCreator to your computer and use it in GitHub Desktop.">
    <span class="octicon octicon-device-desktop"></span>
    Clone in Desktop
  </a>

                <a href="/Sybio/GifCreator/archive/master.zip"
                   class="minibutton sidebar-button"
                   aria-label="Download Sybio/GifCreator as a zip file"
                   title="Download Sybio/GifCreator as a zip file"
                   rel="nofollow">
                  <span class="octicon octicon-cloud-download"></span>
                  Download ZIP
                </a>
              </div>
        </div><!-- /.repository-sidebar -->

        <div id="js-repo-pjax-container" class="repository-content context-loader-container" data-pjax-container>
          


<a href="/Sybio/GifCreator/blob/250fc2f705181693c6c40b3d569d62353164bcbf/src/GifCreator/GifCreator.php" class="hidden js-permalink-shortcut" data-hotkey="y">Permalink</a>

<!-- blob contrib key: blob_contributors:v21:f0fdf278f2dd2541a284446d9fbc4365 -->

<p title="This is a placeholder element" class="js-history-link-replace hidden"></p>

<div class="file-navigation">
  

<div class="select-menu js-menu-container js-select-menu" >
  <span class="minibutton select-menu-button js-menu-target css-truncate" data-hotkey="w"
    data-master-branch="master"
    data-ref="master"
    title="master"
    role="button" aria-label="Switch branches or tags" tabindex="0" aria-haspopup="true">
    <span class="octicon octicon-git-branch"></span>
    <i>branch:</i>
    <span class="js-select-button css-truncate-target">master</span>
  </span>

  <div class="select-menu-modal-holder js-menu-content js-navigation-container" data-pjax aria-hidden="true">

    <div class="select-menu-modal">
      <div class="select-menu-header">
        <span class="select-menu-title">Switch branches/tags</span>
        <span class="octicon octicon-x js-menu-close"></span>
      </div> <!-- /.select-menu-header -->

      <div class="select-menu-filters">
        <div class="select-menu-text-filter">
          <input type="text" aria-label="Filter branches/tags" id="context-commitish-filter-field" class="js-filterable-field js-navigation-enable" placeholder="Filter branches/tags">
        </div>
        <div class="select-menu-tabs">
          <ul>
            <li class="select-menu-tab">
              <a href="#" data-tab-filter="branches" class="js-select-menu-tab">Branches</a>
            </li>
            <li class="select-menu-tab">
              <a href="#" data-tab-filter="tags" class="js-select-menu-tab">Tags</a>
            </li>
          </ul>
        </div><!-- /.select-menu-tabs -->
      </div><!-- /.select-menu-filters -->

      <div class="select-menu-list select-menu-tab-bucket js-select-menu-tab-bucket" data-tab-filter="branches">

        <div data-filterable-for="context-commitish-filter-field" data-filterable-type="substring">


            <div class="select-menu-item js-navigation-item selected">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/Sybio/GifCreator/blob/master/src/GifCreator/GifCreator.php"
                 data-name="master"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="master">master</a>
            </div> <!-- /.select-menu-item -->
        </div>

          <div class="select-menu-no-results">Nothing to show</div>
      </div> <!-- /.select-menu-list -->

      <div class="select-menu-list select-menu-tab-bucket js-select-menu-tab-bucket" data-tab-filter="tags">
        <div data-filterable-for="context-commitish-filter-field" data-filterable-type="substring">


            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/Sybio/GifCreator/tree/1.0.0/src/GifCreator/GifCreator.php"
                 data-name="1.0.0"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="1.0.0">1.0.0</a>
            </div> <!-- /.select-menu-item -->
        </div>

        <div class="select-menu-no-results">Nothing to show</div>
      </div> <!-- /.select-menu-list -->

    </div> <!-- /.select-menu-modal -->
  </div> <!-- /.select-menu-modal-holder -->
</div> <!-- /.select-menu -->

  <div class="button-group right">
    <a href="/Sybio/GifCreator/find/master"
          class="js-show-file-finder minibutton empty-icon tooltipped tooltipped-s"
          data-pjax
          data-hotkey="t"
          aria-label="Quickly jump between files">
      <span class="octicon octicon-list-unordered"></span>
    </a>
    <button class="js-zeroclipboard minibutton zeroclipboard-button"
          data-clipboard-text="src/GifCreator/GifCreator.php"
          aria-label="Copy to clipboard"
          data-copied-hint="Copied!">
      <span class="octicon octicon-clippy"></span>
    </button>
  </div>

  <div class="breadcrumb">
    <span class='repo-root js-repo-root'><span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="/Sybio/GifCreator" data-branch="master" data-direction="back" data-pjax="true" itemscope="url"><span itemprop="title">GifCreator</span></a></span></span><span class="separator"> / </span><span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="/Sybio/GifCreator/tree/master/src" data-branch="master" data-direction="back" data-pjax="true" itemscope="url"><span itemprop="title">src</span></a></span><span class="separator"> / </span><span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="/Sybio/GifCreator/tree/master/src/GifCreator" data-branch="master" data-direction="back" data-pjax="true" itemscope="url"><span itemprop="title">GifCreator</span></a></span><span class="separator"> / </span><strong class="final-path">GifCreator.php</strong>
  </div>
</div>


  <div class="commit commit-loader file-history-tease js-deferred-content" data-url="/Sybio/GifCreator/contributors/master/src/GifCreator/GifCreator.php">
    Fetching contributors…

    <div class="participation">
      <p class="loader-loading"><img alt="" height="16" src="https://assets-cdn.github.com/images/spinners/octocat-spinner-32-EAF2F5.gif" width="16" /></p>
      <p class="loader-error">Cannot retrieve contributors at this time</p>
    </div>
  </div>

<div class="file-box">
  <div class="file">
    <div class="meta clearfix">
      <div class="info file-name">
        <span class="icon"><b class="octicon octicon-file-text"></b></span>
        <span class="mode" title="File Mode">file</span>
        <span class="meta-divider"></span>
          <span>357 lines (269 sloc)</span>
          <span class="meta-divider"></span>
        <span>10.374 kb</span>
      </div>
      <div class="actions">
        <div class="button-group">
            <a class="minibutton tooltipped tooltipped-w"
               href="github-windows://openRepo/https://github.com/Sybio/GifCreator?branch=master&amp;filepath=src%2FGifCreator%2FGifCreator.php" aria-label="Open this file in GitHub for Windows">
                <span class="octicon octicon-device-desktop"></span> Open
            </a>
                <a class="minibutton tooltipped tooltipped-n js-update-url-with-hash"
                   aria-label="Clicking this button will automatically fork this project so you can edit the file"
                   href="/Sybio/GifCreator/edit/master/src/GifCreator/GifCreator.php"
                   data-method="post" rel="nofollow">Edit</a>
          <a href="/Sybio/GifCreator/raw/master/src/GifCreator/GifCreator.php" class="button minibutton " id="raw-url">Raw</a>
            <a href="/Sybio/GifCreator/blame/master/src/GifCreator/GifCreator.php" class="button minibutton js-update-url-with-hash">Blame</a>
          <a href="/Sybio/GifCreator/commits/master/src/GifCreator/GifCreator.php" class="button minibutton " rel="nofollow">History</a>
        </div><!-- /.button-group -->

            <a class="minibutton danger empty-icon tooltipped tooltipped-s"
               href="/Sybio/GifCreator/delete/master/src/GifCreator/GifCreator.php"
               aria-label="Fork this project and delete file"
               data-method="post" data-test-id="delete-blob-file" rel="nofollow">

          Delete
        </a>
      </div><!-- /.actions -->
    </div>
      
  <div class="blob-wrapper data type-php js-blob-data">
       <table class="file-code file-diff tab-size-8">
         <tr class="file-code-line">
           <td class="blob-line-nums">
             <span id="L1" rel="#L1">1</span>
<span id="L2" rel="#L2">2</span>
<span id="L3" rel="#L3">3</span>
<span id="L4" rel="#L4">4</span>
<span id="L5" rel="#L5">5</span>
<span id="L6" rel="#L6">6</span>
<span id="L7" rel="#L7">7</span>
<span id="L8" rel="#L8">8</span>
<span id="L9" rel="#L9">9</span>
<span id="L10" rel="#L10">10</span>
<span id="L11" rel="#L11">11</span>
<span id="L12" rel="#L12">12</span>
<span id="L13" rel="#L13">13</span>
<span id="L14" rel="#L14">14</span>
<span id="L15" rel="#L15">15</span>
<span id="L16" rel="#L16">16</span>
<span id="L17" rel="#L17">17</span>
<span id="L18" rel="#L18">18</span>
<span id="L19" rel="#L19">19</span>
<span id="L20" rel="#L20">20</span>
<span id="L21" rel="#L21">21</span>
<span id="L22" rel="#L22">22</span>
<span id="L23" rel="#L23">23</span>
<span id="L24" rel="#L24">24</span>
<span id="L25" rel="#L25">25</span>
<span id="L26" rel="#L26">26</span>
<span id="L27" rel="#L27">27</span>
<span id="L28" rel="#L28">28</span>
<span id="L29" rel="#L29">29</span>
<span id="L30" rel="#L30">30</span>
<span id="L31" rel="#L31">31</span>
<span id="L32" rel="#L32">32</span>
<span id="L33" rel="#L33">33</span>
<span id="L34" rel="#L34">34</span>
<span id="L35" rel="#L35">35</span>
<span id="L36" rel="#L36">36</span>
<span id="L37" rel="#L37">37</span>
<span id="L38" rel="#L38">38</span>
<span id="L39" rel="#L39">39</span>
<span id="L40" rel="#L40">40</span>
<span id="L41" rel="#L41">41</span>
<span id="L42" rel="#L42">42</span>
<span id="L43" rel="#L43">43</span>
<span id="L44" rel="#L44">44</span>
<span id="L45" rel="#L45">45</span>
<span id="L46" rel="#L46">46</span>
<span id="L47" rel="#L47">47</span>
<span id="L48" rel="#L48">48</span>
<span id="L49" rel="#L49">49</span>
<span id="L50" rel="#L50">50</span>
<span id="L51" rel="#L51">51</span>
<span id="L52" rel="#L52">52</span>
<span id="L53" rel="#L53">53</span>
<span id="L54" rel="#L54">54</span>
<span id="L55" rel="#L55">55</span>
<span id="L56" rel="#L56">56</span>
<span id="L57" rel="#L57">57</span>
<span id="L58" rel="#L58">58</span>
<span id="L59" rel="#L59">59</span>
<span id="L60" rel="#L60">60</span>
<span id="L61" rel="#L61">61</span>
<span id="L62" rel="#L62">62</span>
<span id="L63" rel="#L63">63</span>
<span id="L64" rel="#L64">64</span>
<span id="L65" rel="#L65">65</span>
<span id="L66" rel="#L66">66</span>
<span id="L67" rel="#L67">67</span>
<span id="L68" rel="#L68">68</span>
<span id="L69" rel="#L69">69</span>
<span id="L70" rel="#L70">70</span>
<span id="L71" rel="#L71">71</span>
<span id="L72" rel="#L72">72</span>
<span id="L73" rel="#L73">73</span>
<span id="L74" rel="#L74">74</span>
<span id="L75" rel="#L75">75</span>
<span id="L76" rel="#L76">76</span>
<span id="L77" rel="#L77">77</span>
<span id="L78" rel="#L78">78</span>
<span id="L79" rel="#L79">79</span>
<span id="L80" rel="#L80">80</span>
<span id="L81" rel="#L81">81</span>
<span id="L82" rel="#L82">82</span>
<span id="L83" rel="#L83">83</span>
<span id="L84" rel="#L84">84</span>
<span id="L85" rel="#L85">85</span>
<span id="L86" rel="#L86">86</span>
<span id="L87" rel="#L87">87</span>
<span id="L88" rel="#L88">88</span>
<span id="L89" rel="#L89">89</span>
<span id="L90" rel="#L90">90</span>
<span id="L91" rel="#L91">91</span>
<span id="L92" rel="#L92">92</span>
<span id="L93" rel="#L93">93</span>
<span id="L94" rel="#L94">94</span>
<span id="L95" rel="#L95">95</span>
<span id="L96" rel="#L96">96</span>
<span id="L97" rel="#L97">97</span>
<span id="L98" rel="#L98">98</span>
<span id="L99" rel="#L99">99</span>
<span id="L100" rel="#L100">100</span>
<span id="L101" rel="#L101">101</span>
<span id="L102" rel="#L102">102</span>
<span id="L103" rel="#L103">103</span>
<span id="L104" rel="#L104">104</span>
<span id="L105" rel="#L105">105</span>
<span id="L106" rel="#L106">106</span>
<span id="L107" rel="#L107">107</span>
<span id="L108" rel="#L108">108</span>
<span id="L109" rel="#L109">109</span>
<span id="L110" rel="#L110">110</span>
<span id="L111" rel="#L111">111</span>
<span id="L112" rel="#L112">112</span>
<span id="L113" rel="#L113">113</span>
<span id="L114" rel="#L114">114</span>
<span id="L115" rel="#L115">115</span>
<span id="L116" rel="#L116">116</span>
<span id="L117" rel="#L117">117</span>
<span id="L118" rel="#L118">118</span>
<span id="L119" rel="#L119">119</span>
<span id="L120" rel="#L120">120</span>
<span id="L121" rel="#L121">121</span>
<span id="L122" rel="#L122">122</span>
<span id="L123" rel="#L123">123</span>
<span id="L124" rel="#L124">124</span>
<span id="L125" rel="#L125">125</span>
<span id="L126" rel="#L126">126</span>
<span id="L127" rel="#L127">127</span>
<span id="L128" rel="#L128">128</span>
<span id="L129" rel="#L129">129</span>
<span id="L130" rel="#L130">130</span>
<span id="L131" rel="#L131">131</span>
<span id="L132" rel="#L132">132</span>
<span id="L133" rel="#L133">133</span>
<span id="L134" rel="#L134">134</span>
<span id="L135" rel="#L135">135</span>
<span id="L136" rel="#L136">136</span>
<span id="L137" rel="#L137">137</span>
<span id="L138" rel="#L138">138</span>
<span id="L139" rel="#L139">139</span>
<span id="L140" rel="#L140">140</span>
<span id="L141" rel="#L141">141</span>
<span id="L142" rel="#L142">142</span>
<span id="L143" rel="#L143">143</span>
<span id="L144" rel="#L144">144</span>
<span id="L145" rel="#L145">145</span>
<span id="L146" rel="#L146">146</span>
<span id="L147" rel="#L147">147</span>
<span id="L148" rel="#L148">148</span>
<span id="L149" rel="#L149">149</span>
<span id="L150" rel="#L150">150</span>
<span id="L151" rel="#L151">151</span>
<span id="L152" rel="#L152">152</span>
<span id="L153" rel="#L153">153</span>
<span id="L154" rel="#L154">154</span>
<span id="L155" rel="#L155">155</span>
<span id="L156" rel="#L156">156</span>
<span id="L157" rel="#L157">157</span>
<span id="L158" rel="#L158">158</span>
<span id="L159" rel="#L159">159</span>
<span id="L160" rel="#L160">160</span>
<span id="L161" rel="#L161">161</span>
<span id="L162" rel="#L162">162</span>
<span id="L163" rel="#L163">163</span>
<span id="L164" rel="#L164">164</span>
<span id="L165" rel="#L165">165</span>
<span id="L166" rel="#L166">166</span>
<span id="L167" rel="#L167">167</span>
<span id="L168" rel="#L168">168</span>
<span id="L169" rel="#L169">169</span>
<span id="L170" rel="#L170">170</span>
<span id="L171" rel="#L171">171</span>
<span id="L172" rel="#L172">172</span>
<span id="L173" rel="#L173">173</span>
<span id="L174" rel="#L174">174</span>
<span id="L175" rel="#L175">175</span>
<span id="L176" rel="#L176">176</span>
<span id="L177" rel="#L177">177</span>
<span id="L178" rel="#L178">178</span>
<span id="L179" rel="#L179">179</span>
<span id="L180" rel="#L180">180</span>
<span id="L181" rel="#L181">181</span>
<span id="L182" rel="#L182">182</span>
<span id="L183" rel="#L183">183</span>
<span id="L184" rel="#L184">184</span>
<span id="L185" rel="#L185">185</span>
<span id="L186" rel="#L186">186</span>
<span id="L187" rel="#L187">187</span>
<span id="L188" rel="#L188">188</span>
<span id="L189" rel="#L189">189</span>
<span id="L190" rel="#L190">190</span>
<span id="L191" rel="#L191">191</span>
<span id="L192" rel="#L192">192</span>
<span id="L193" rel="#L193">193</span>
<span id="L194" rel="#L194">194</span>
<span id="L195" rel="#L195">195</span>
<span id="L196" rel="#L196">196</span>
<span id="L197" rel="#L197">197</span>
<span id="L198" rel="#L198">198</span>
<span id="L199" rel="#L199">199</span>
<span id="L200" rel="#L200">200</span>
<span id="L201" rel="#L201">201</span>
<span id="L202" rel="#L202">202</span>
<span id="L203" rel="#L203">203</span>
<span id="L204" rel="#L204">204</span>
<span id="L205" rel="#L205">205</span>
<span id="L206" rel="#L206">206</span>
<span id="L207" rel="#L207">207</span>
<span id="L208" rel="#L208">208</span>
<span id="L209" rel="#L209">209</span>
<span id="L210" rel="#L210">210</span>
<span id="L211" rel="#L211">211</span>
<span id="L212" rel="#L212">212</span>
<span id="L213" rel="#L213">213</span>
<span id="L214" rel="#L214">214</span>
<span id="L215" rel="#L215">215</span>
<span id="L216" rel="#L216">216</span>
<span id="L217" rel="#L217">217</span>
<span id="L218" rel="#L218">218</span>
<span id="L219" rel="#L219">219</span>
<span id="L220" rel="#L220">220</span>
<span id="L221" rel="#L221">221</span>
<span id="L222" rel="#L222">222</span>
<span id="L223" rel="#L223">223</span>
<span id="L224" rel="#L224">224</span>
<span id="L225" rel="#L225">225</span>
<span id="L226" rel="#L226">226</span>
<span id="L227" rel="#L227">227</span>
<span id="L228" rel="#L228">228</span>
<span id="L229" rel="#L229">229</span>
<span id="L230" rel="#L230">230</span>
<span id="L231" rel="#L231">231</span>
<span id="L232" rel="#L232">232</span>
<span id="L233" rel="#L233">233</span>
<span id="L234" rel="#L234">234</span>
<span id="L235" rel="#L235">235</span>
<span id="L236" rel="#L236">236</span>
<span id="L237" rel="#L237">237</span>
<span id="L238" rel="#L238">238</span>
<span id="L239" rel="#L239">239</span>
<span id="L240" rel="#L240">240</span>
<span id="L241" rel="#L241">241</span>
<span id="L242" rel="#L242">242</span>
<span id="L243" rel="#L243">243</span>
<span id="L244" rel="#L244">244</span>
<span id="L245" rel="#L245">245</span>
<span id="L246" rel="#L246">246</span>
<span id="L247" rel="#L247">247</span>
<span id="L248" rel="#L248">248</span>
<span id="L249" rel="#L249">249</span>
<span id="L250" rel="#L250">250</span>
<span id="L251" rel="#L251">251</span>
<span id="L252" rel="#L252">252</span>
<span id="L253" rel="#L253">253</span>
<span id="L254" rel="#L254">254</span>
<span id="L255" rel="#L255">255</span>
<span id="L256" rel="#L256">256</span>
<span id="L257" rel="#L257">257</span>
<span id="L258" rel="#L258">258</span>
<span id="L259" rel="#L259">259</span>
<span id="L260" rel="#L260">260</span>
<span id="L261" rel="#L261">261</span>
<span id="L262" rel="#L262">262</span>
<span id="L263" rel="#L263">263</span>
<span id="L264" rel="#L264">264</span>
<span id="L265" rel="#L265">265</span>
<span id="L266" rel="#L266">266</span>
<span id="L267" rel="#L267">267</span>
<span id="L268" rel="#L268">268</span>
<span id="L269" rel="#L269">269</span>
<span id="L270" rel="#L270">270</span>
<span id="L271" rel="#L271">271</span>
<span id="L272" rel="#L272">272</span>
<span id="L273" rel="#L273">273</span>
<span id="L274" rel="#L274">274</span>
<span id="L275" rel="#L275">275</span>
<span id="L276" rel="#L276">276</span>
<span id="L277" rel="#L277">277</span>
<span id="L278" rel="#L278">278</span>
<span id="L279" rel="#L279">279</span>
<span id="L280" rel="#L280">280</span>
<span id="L281" rel="#L281">281</span>
<span id="L282" rel="#L282">282</span>
<span id="L283" rel="#L283">283</span>
<span id="L284" rel="#L284">284</span>
<span id="L285" rel="#L285">285</span>
<span id="L286" rel="#L286">286</span>
<span id="L287" rel="#L287">287</span>
<span id="L288" rel="#L288">288</span>
<span id="L289" rel="#L289">289</span>
<span id="L290" rel="#L290">290</span>
<span id="L291" rel="#L291">291</span>
<span id="L292" rel="#L292">292</span>
<span id="L293" rel="#L293">293</span>
<span id="L294" rel="#L294">294</span>
<span id="L295" rel="#L295">295</span>
<span id="L296" rel="#L296">296</span>
<span id="L297" rel="#L297">297</span>
<span id="L298" rel="#L298">298</span>
<span id="L299" rel="#L299">299</span>
<span id="L300" rel="#L300">300</span>
<span id="L301" rel="#L301">301</span>
<span id="L302" rel="#L302">302</span>
<span id="L303" rel="#L303">303</span>
<span id="L304" rel="#L304">304</span>
<span id="L305" rel="#L305">305</span>
<span id="L306" rel="#L306">306</span>
<span id="L307" rel="#L307">307</span>
<span id="L308" rel="#L308">308</span>
<span id="L309" rel="#L309">309</span>
<span id="L310" rel="#L310">310</span>
<span id="L311" rel="#L311">311</span>
<span id="L312" rel="#L312">312</span>
<span id="L313" rel="#L313">313</span>
<span id="L314" rel="#L314">314</span>
<span id="L315" rel="#L315">315</span>
<span id="L316" rel="#L316">316</span>
<span id="L317" rel="#L317">317</span>
<span id="L318" rel="#L318">318</span>
<span id="L319" rel="#L319">319</span>
<span id="L320" rel="#L320">320</span>
<span id="L321" rel="#L321">321</span>
<span id="L322" rel="#L322">322</span>
<span id="L323" rel="#L323">323</span>
<span id="L324" rel="#L324">324</span>
<span id="L325" rel="#L325">325</span>
<span id="L326" rel="#L326">326</span>
<span id="L327" rel="#L327">327</span>
<span id="L328" rel="#L328">328</span>
<span id="L329" rel="#L329">329</span>
<span id="L330" rel="#L330">330</span>
<span id="L331" rel="#L331">331</span>
<span id="L332" rel="#L332">332</span>
<span id="L333" rel="#L333">333</span>
<span id="L334" rel="#L334">334</span>
<span id="L335" rel="#L335">335</span>
<span id="L336" rel="#L336">336</span>
<span id="L337" rel="#L337">337</span>
<span id="L338" rel="#L338">338</span>
<span id="L339" rel="#L339">339</span>
<span id="L340" rel="#L340">340</span>
<span id="L341" rel="#L341">341</span>
<span id="L342" rel="#L342">342</span>
<span id="L343" rel="#L343">343</span>
<span id="L344" rel="#L344">344</span>
<span id="L345" rel="#L345">345</span>
<span id="L346" rel="#L346">346</span>
<span id="L347" rel="#L347">347</span>
<span id="L348" rel="#L348">348</span>
<span id="L349" rel="#L349">349</span>
<span id="L350" rel="#L350">350</span>
<span id="L351" rel="#L351">351</span>
<span id="L352" rel="#L352">352</span>
<span id="L353" rel="#L353">353</span>
<span id="L354" rel="#L354">354</span>
<span id="L355" rel="#L355">355</span>
<span id="L356" rel="#L356">356</span>
<span id="L357" rel="#L357">357</span>

           </td>
           <td class="blob-line-code"><div class="code-body highlight"><pre><div class='line' id='LC1'><span class="o">&lt;?</span><span class="nx">php</span></div><div class='line' id='LC2'><br/></div><div class='line' id='LC3'><span class="k">namespace</span> <span class="nx">GifCreator</span><span class="p">;</span></div><div class='line' id='LC4'><br/></div><div class='line' id='LC5'><span class="sd">/**</span></div><div class='line' id='LC6'><span class="sd"> * Create an animated GIF from multiple images</span></div><div class='line' id='LC7'><span class="sd"> * </span></div><div class='line' id='LC8'><span class="sd"> * @version 1.0</span></div><div class='line' id='LC9'><span class="sd"> * @link https://github.com/Sybio/GifCreator</span></div><div class='line' id='LC10'><span class="sd"> * @author Sybio (Clément Guillemain  / @Sybio01)</span></div><div class='line' id='LC11'><span class="sd"> * @license http://opensource.org/licenses/gpl-license.php GNU Public License</span></div><div class='line' id='LC12'><span class="sd"> * @copyright Clément Guillemain</span></div><div class='line' id='LC13'><span class="sd"> */</span></div><div class='line' id='LC14'><span class="k">class</span> <span class="nc">GifCreator</span></div><div class='line' id='LC15'><span class="p">{</span></div><div class='line' id='LC16'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC17'><span class="sd">     * @var string The gif string source (old: this-&gt;GIF)</span></div><div class='line' id='LC18'><span class="sd">     */</span></div><div class='line' id='LC19'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">private</span> <span class="nv">$gif</span><span class="p">;</span></div><div class='line' id='LC20'>&nbsp;&nbsp;&nbsp;&nbsp;</div><div class='line' id='LC21'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC22'><span class="sd">     * @var string Encoder version (old: this-&gt;VER)</span></div><div class='line' id='LC23'><span class="sd">     */</span></div><div class='line' id='LC24'>	<span class="k">private</span> <span class="nv">$version</span><span class="p">;</span></div><div class='line' id='LC25'>&nbsp;&nbsp;&nbsp;&nbsp;</div><div class='line' id='LC26'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC27'><span class="sd">     * @var boolean Check the image is build or not (old: this-&gt;IMG)</span></div><div class='line' id='LC28'><span class="sd">     */</span></div><div class='line' id='LC29'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">private</span> <span class="nv">$imgBuilt</span><span class="p">;</span></div><div class='line' id='LC30'><br/></div><div class='line' id='LC31'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC32'><span class="sd">     * @var array Frames string sources (old: this-&gt;BUF)</span></div><div class='line' id='LC33'><span class="sd">     */</span></div><div class='line' id='LC34'>	<span class="k">private</span> <span class="nv">$frameSources</span><span class="p">;</span></div><div class='line' id='LC35'>&nbsp;&nbsp;&nbsp;&nbsp;</div><div class='line' id='LC36'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC37'><span class="sd">     * @var integer Gif loop (old: this-&gt;LOP)</span></div><div class='line' id='LC38'><span class="sd">     */</span></div><div class='line' id='LC39'>	<span class="k">private</span> <span class="nv">$loop</span><span class="p">;</span></div><div class='line' id='LC40'>&nbsp;&nbsp;&nbsp;&nbsp;</div><div class='line' id='LC41'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC42'><span class="sd">     * @var integer Gif dis (old: this-&gt;DIS)</span></div><div class='line' id='LC43'><span class="sd">     */</span></div><div class='line' id='LC44'>	<span class="k">private</span> <span class="nv">$dis</span><span class="p">;</span></div><div class='line' id='LC45'>&nbsp;&nbsp;&nbsp;&nbsp;</div><div class='line' id='LC46'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC47'><span class="sd">     * @var integer Gif color (old: this-&gt;COL)</span></div><div class='line' id='LC48'><span class="sd">     */</span></div><div class='line' id='LC49'>	<span class="k">private</span> <span class="nv">$colour</span><span class="p">;</span></div><div class='line' id='LC50'>&nbsp;&nbsp;&nbsp;&nbsp;</div><div class='line' id='LC51'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC52'><span class="sd">     * @var array (old: this-&gt;ERR)</span></div><div class='line' id='LC53'><span class="sd">     */</span></div><div class='line' id='LC54'>	<span class="k">private</span> <span class="nv">$errors</span><span class="p">;</span></div><div class='line' id='LC55'>&nbsp;</div><div class='line' id='LC56'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// Methods</span></div><div class='line' id='LC57'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// ===================================================================================</span></div><div class='line' id='LC58'>&nbsp;&nbsp;&nbsp;&nbsp;</div><div class='line' id='LC59'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC60'><span class="sd">     * Constructor</span></div><div class='line' id='LC61'><span class="sd">     */</span></div><div class='line' id='LC62'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">__construct</span><span class="p">()</span></div><div class='line' id='LC63'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">{</span></div><div class='line' id='LC64'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">reset</span><span class="p">();</span></div><div class='line' id='LC65'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div><div class='line' id='LC66'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// Static data</span></div><div class='line' id='LC67'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">version</span> <span class="o">=</span> <span class="s1">&#39;GifCreator: Under development&#39;</span><span class="p">;</span></div><div class='line' id='LC68'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">errors</span> <span class="o">=</span> <span class="k">array</span><span class="p">(</span></div><div class='line' id='LC69'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;ERR00&#39;</span> <span class="o">=&gt;</span> <span class="s1">&#39;Does not supported function for only one image.&#39;</span><span class="p">,</span></div><div class='line' id='LC70'>&nbsp;&nbsp;&nbsp;&nbsp;		<span class="s1">&#39;ERR01&#39;</span> <span class="o">=&gt;</span> <span class="s1">&#39;Source is not a GIF image.&#39;</span><span class="p">,</span></div><div class='line' id='LC71'>&nbsp;&nbsp;&nbsp;&nbsp;		<span class="s1">&#39;ERR02&#39;</span> <span class="o">=&gt;</span> <span class="s1">&#39;You have to give resource image variables, image URL or image binary sources in $frames array.&#39;</span><span class="p">,</span></div><div class='line' id='LC72'>&nbsp;&nbsp;&nbsp;&nbsp;		<span class="s1">&#39;ERR03&#39;</span> <span class="o">=&gt;</span> <span class="s1">&#39;Does not make animation from animated GIF source.&#39;</span><span class="p">,</span></div><div class='line' id='LC73'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">);</span></div><div class='line' id='LC74'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC75'><br/></div><div class='line' id='LC76'>	<span class="sd">/**</span></div><div class='line' id='LC77'><span class="sd">     * Create the GIF string (old: GIFEncoder)</span></div><div class='line' id='LC78'><span class="sd">     * </span></div><div class='line' id='LC79'><span class="sd">     * @param array $frames An array of frame: can be file paths, resource image variables, binary sources or image URLs</span></div><div class='line' id='LC80'><span class="sd">     * @param array $durations An array containing the duration of each frame</span></div><div class='line' id='LC81'><span class="sd">     * @param integer $loop Number of GIF loops before stopping animation (Set 0 to get an infinite loop)</span></div><div class='line' id='LC82'><span class="sd">     * </span></div><div class='line' id='LC83'><span class="sd">     * @return string The GIF string source</span></div><div class='line' id='LC84'><span class="sd">     */</span></div><div class='line' id='LC85'>	<span class="k">public</span> <span class="k">function</span> <span class="nf">create</span><span class="p">(</span><span class="nv">$frames</span> <span class="o">=</span> <span class="k">array</span><span class="p">(),</span> <span class="nv">$durations</span> <span class="o">=</span> <span class="k">array</span><span class="p">(),</span> <span class="nv">$loop</span> <span class="o">=</span> <span class="mi">0</span><span class="p">)</span></div><div class='line' id='LC86'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">{</span></div><div class='line' id='LC87'>		<span class="k">if</span> <span class="p">(</span><span class="o">!</span><span class="nb">is_array</span><span class="p">(</span><span class="nv">$frames</span><span class="p">)</span> <span class="o">&amp;&amp;</span> <span class="o">!</span><span class="nb">is_array</span><span class="p">(</span><span class="nv">$GIF_tim</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC88'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div><div class='line' id='LC89'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">throw</span> <span class="k">new</span> <span class="nx">\Exception</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">version</span><span class="o">.</span><span class="s1">&#39;: &#39;</span><span class="o">.</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">errors</span><span class="p">[</span><span class="s1">&#39;ERR00&#39;</span><span class="p">]);</span></div><div class='line' id='LC90'>		<span class="p">}</span></div><div class='line' id='LC91'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div><div class='line' id='LC92'>		<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">loop</span> <span class="o">=</span> <span class="p">(</span><span class="nv">$loop</span> <span class="o">&gt;</span> <span class="o">-</span><span class="mi">1</span><span class="p">)</span> <span class="o">?</span> <span class="nv">$loop</span> <span class="o">:</span> <span class="mi">0</span><span class="p">;</span></div><div class='line' id='LC93'>		<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">dis</span> <span class="o">=</span> <span class="mi">2</span><span class="p">;</span></div><div class='line' id='LC94'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div><div class='line' id='LC95'>		<span class="k">for</span> <span class="p">(</span><span class="nv">$i</span> <span class="o">=</span> <span class="mi">0</span><span class="p">;</span> <span class="nv">$i</span> <span class="o">&lt;</span> <span class="nb">count</span><span class="p">(</span><span class="nv">$frames</span><span class="p">);</span> <span class="nv">$i</span><span class="o">++</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC96'><br/></div><div class='line' id='LC97'>			<span class="k">if</span> <span class="p">(</span><span class="nb">is_resource</span><span class="p">(</span><span class="nv">$frames</span><span class="p">[</span><span class="nv">$i</span><span class="p">]))</span> <span class="p">{</span> <span class="c1">// Resource var</span></div><div class='line' id='LC98'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div><div class='line' id='LC99'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$resourceImg</span> <span class="o">=</span> <span class="nv">$frames</span><span class="p">[</span><span class="nv">$i</span><span class="p">];</span></div><div class='line' id='LC100'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div><div class='line' id='LC101'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nb">ob_start</span><span class="p">();</span></div><div class='line' id='LC102'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nb">imagegif</span><span class="p">(</span><span class="nv">$frames</span><span class="p">[</span><span class="nv">$i</span><span class="p">]);</span></div><div class='line' id='LC103'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">frameSources</span><span class="p">[]</span> <span class="o">=</span> <span class="nb">ob_get_contents</span><span class="p">();</span></div><div class='line' id='LC104'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nb">ob_end_clean</span><span class="p">();</span></div><div class='line' id='LC105'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div><div class='line' id='LC106'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span> <span class="k">elseif</span> <span class="p">(</span><span class="nb">is_string</span><span class="p">(</span><span class="nv">$frames</span><span class="p">[</span><span class="nv">$i</span><span class="p">]))</span> <span class="p">{</span> <span class="c1">// File path or URL or Binary source code</span></div><div class='line' id='LC107'><br/></div><div class='line' id='LC108'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nb">file_exists</span><span class="p">(</span><span class="nv">$frames</span><span class="p">[</span><span class="nv">$i</span><span class="p">])</span> <span class="o">||</span> <span class="nb">filter_var</span><span class="p">(</span><span class="nv">$frames</span><span class="p">[</span><span class="nv">$i</span><span class="p">],</span> <span class="nx">FILTER_VALIDATE_URL</span><span class="p">))</span> <span class="p">{</span> <span class="c1">// File path</span></div><div class='line' id='LC109'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div><div class='line' id='LC110'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$frames</span><span class="p">[</span><span class="nv">$i</span><span class="p">]</span> <span class="o">=</span> <span class="nb">file_get_contents</span><span class="p">(</span><span class="nv">$frames</span><span class="p">[</span><span class="nv">$i</span><span class="p">]);</span>                    </div><div class='line' id='LC111'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC112'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div><div class='line' id='LC113'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$resourceImg</span> <span class="o">=</span> <span class="nb">imagecreatefromstring</span><span class="p">(</span><span class="nv">$frames</span><span class="p">[</span><span class="nv">$i</span><span class="p">]);</span></div><div class='line' id='LC114'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div><div class='line' id='LC115'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nb">ob_start</span><span class="p">();</span></div><div class='line' id='LC116'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nb">imagegif</span><span class="p">(</span><span class="nv">$resourceImg</span><span class="p">);</span></div><div class='line' id='LC117'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">frameSources</span><span class="p">[]</span> <span class="o">=</span> <span class="nb">ob_get_contents</span><span class="p">();</span></div><div class='line' id='LC118'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nb">ob_end_clean</span><span class="p">();</span></div><div class='line' id='LC119'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div><div class='line' id='LC120'>			<span class="p">}</span> <span class="k">else</span> <span class="p">{</span> <span class="c1">// Fail</span></div><div class='line' id='LC121'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div><div class='line' id='LC122'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">throw</span> <span class="k">new</span> <span class="nx">\Exception</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">version</span><span class="o">.</span><span class="s1">&#39;: &#39;</span><span class="o">.</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">errors</span><span class="p">[</span><span class="s1">&#39;ERR02&#39;</span><span class="p">]</span><span class="o">.</span><span class="s1">&#39; (&#39;</span><span class="o">.</span><span class="nv">$mode</span><span class="o">.</span><span class="s1">&#39;)&#39;</span><span class="p">);</span></div><div class='line' id='LC123'>			<span class="p">}</span></div><div class='line' id='LC124'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div><div class='line' id='LC125'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nv">$i</span> <span class="o">==</span> <span class="mi">0</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC126'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div><div class='line' id='LC127'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$colour</span> <span class="o">=</span> <span class="nb">imagecolortransparent</span><span class="p">(</span><span class="nv">$resourceImg</span><span class="p">);</span></div><div class='line' id='LC128'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC129'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div><div class='line' id='LC130'>			<span class="k">if</span> <span class="p">(</span><span class="nb">substr</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">frameSources</span><span class="p">[</span><span class="nv">$i</span><span class="p">],</span> <span class="mi">0</span><span class="p">,</span> <span class="mi">6</span><span class="p">)</span> <span class="o">!=</span> <span class="s1">&#39;GIF87a&#39;</span> <span class="o">&amp;&amp;</span> <span class="nb">substr</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">frameSources</span><span class="p">[</span><span class="nv">$i</span><span class="p">],</span> <span class="mi">0</span><span class="p">,</span> <span class="mi">6</span><span class="p">)</span> <span class="o">!=</span> <span class="s1">&#39;GIF89a&#39;</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC131'><br/></div><div class='line' id='LC132'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">throw</span> <span class="k">new</span> <span class="nx">\Exception</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">version</span><span class="o">.</span><span class="s1">&#39;: &#39;</span><span class="o">.</span><span class="nv">$i</span><span class="o">.</span><span class="s1">&#39; &#39;</span><span class="o">.</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">errors</span><span class="p">[</span><span class="s1">&#39;ERR01&#39;</span><span class="p">]);</span></div><div class='line' id='LC133'>			<span class="p">}</span></div><div class='line' id='LC134'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div><div class='line' id='LC135'>			<span class="k">for</span> <span class="p">(</span><span class="nv">$j</span> <span class="o">=</span> <span class="p">(</span><span class="mi">13</span> <span class="o">+</span> <span class="mi">3</span> <span class="o">*</span> <span class="p">(</span><span class="mi">2</span> <span class="o">&lt;&lt;</span> <span class="p">(</span><span class="nb">ord</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">frameSources</span><span class="p">[</span><span class="nv">$i</span><span class="p">]</span> <span class="p">{</span> <span class="mi">10</span> <span class="p">})</span> <span class="o">&amp;</span> <span class="mh">0x07</span><span class="p">))),</span> <span class="nv">$k</span> <span class="o">=</span> <span class="k">TRUE</span><span class="p">;</span> <span class="nv">$k</span><span class="p">;</span> <span class="nv">$j</span><span class="o">++</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC136'><br/></div><div class='line' id='LC137'>				<span class="k">switch</span> <span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">frameSources</span><span class="p">[</span><span class="nv">$i</span><span class="p">]</span> <span class="p">{</span> <span class="nv">$j</span> <span class="p">})</span> <span class="p">{</span></div><div class='line' id='LC138'><br/></div><div class='line' id='LC139'>					<span class="k">case</span> <span class="s1">&#39;!&#39;</span><span class="o">:</span></div><div class='line' id='LC140'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div><div class='line' id='LC141'>						<span class="k">if</span> <span class="p">((</span><span class="nb">substr</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">frameSources</span><span class="p">[</span><span class="nv">$i</span><span class="p">],</span> <span class="p">(</span><span class="nv">$j</span> <span class="o">+</span> <span class="mi">3</span><span class="p">),</span> <span class="mi">8</span><span class="p">))</span> <span class="o">==</span> <span class="s1">&#39;NETSCAPE&#39;</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC142'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div><div class='line' id='LC143'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">throw</span> <span class="k">new</span> <span class="nx">\Exception</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">version</span><span class="o">.</span><span class="s1">&#39;: &#39;</span><span class="o">.</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">errors</span><span class="p">[</span><span class="s1">&#39;ERR03&#39;</span><span class="p">]</span><span class="o">.</span><span class="s1">&#39; (&#39;</span><span class="o">.</span><span class="p">(</span><span class="nv">$i</span> <span class="o">+</span> <span class="mi">1</span><span class="p">)</span><span class="o">.</span><span class="s1">&#39; source).&#39;</span><span class="p">);</span></div><div class='line' id='LC144'>						<span class="p">}</span></div><div class='line' id='LC145'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div><div class='line' id='LC146'>					<span class="k">break</span><span class="p">;</span></div><div class='line' id='LC147'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div><div class='line' id='LC148'>					<span class="k">case</span> <span class="s1">&#39;;&#39;</span><span class="o">:</span></div><div class='line' id='LC149'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div><div class='line' id='LC150'>						<span class="nv">$k</span> <span class="o">=</span> <span class="k">false</span><span class="p">;</span></div><div class='line' id='LC151'>					<span class="k">break</span><span class="p">;</span></div><div class='line' id='LC152'>				<span class="p">}</span></div><div class='line' id='LC153'>			<span class="p">}</span></div><div class='line' id='LC154'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div><div class='line' id='LC155'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nb">unset</span><span class="p">(</span><span class="nv">$resourceImg</span><span class="p">);</span></div><div class='line' id='LC156'>		<span class="p">}</span></div><div class='line' id='LC157'><br/></div><div class='line' id='LC158'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nb">isset</span><span class="p">(</span><span class="nv">$colour</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC159'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div><div class='line' id='LC160'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">colour</span> <span class="o">=</span> <span class="nv">$colour</span><span class="p">;</span></div><div class='line' id='LC161'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div><div class='line' id='LC162'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span> <span class="k">else</span> <span class="p">{</span></div><div class='line' id='LC163'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div><div class='line' id='LC164'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$red</span> <span class="o">=</span> <span class="nv">$green</span> <span class="o">=</span> <span class="nv">$blue</span> <span class="o">=</span> <span class="mi">0</span><span class="p">;</span></div><div class='line' id='LC165'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">colour</span> <span class="o">=</span> <span class="p">(</span><span class="nv">$red</span> <span class="o">&gt;</span> <span class="o">-</span><span class="mi">1</span> <span class="o">&amp;&amp;</span> <span class="nv">$green</span> <span class="o">&gt;</span> <span class="o">-</span><span class="mi">1</span> <span class="o">&amp;&amp;</span> <span class="nv">$blue</span> <span class="o">&gt;</span> <span class="o">-</span><span class="mi">1</span><span class="p">)</span> <span class="o">?</span> <span class="p">(</span><span class="nv">$red</span> <span class="o">|</span> <span class="p">(</span><span class="nv">$green</span> <span class="o">&lt;&lt;</span> <span class="mi">8</span><span class="p">)</span> <span class="o">|</span> <span class="p">(</span><span class="nv">$blue</span> <span class="o">&lt;&lt;</span> <span class="mi">16</span><span class="p">))</span> <span class="o">:</span> <span class="o">-</span><span class="mi">1</span><span class="p">;</span></div><div class='line' id='LC166'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC167'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div><div class='line' id='LC168'>		<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">gifAddHeader</span><span class="p">();</span></div><div class='line' id='LC169'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div><div class='line' id='LC170'>		<span class="k">for</span> <span class="p">(</span><span class="nv">$i</span> <span class="o">=</span> <span class="mi">0</span><span class="p">;</span> <span class="nv">$i</span> <span class="o">&lt;</span> <span class="nb">count</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">frameSources</span><span class="p">);</span> <span class="nv">$i</span><span class="o">++</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC171'><br/></div><div class='line' id='LC172'>			<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">addGifFrames</span><span class="p">(</span><span class="nv">$i</span><span class="p">,</span> <span class="nv">$durations</span><span class="p">[</span><span class="nv">$i</span><span class="p">]);</span></div><div class='line' id='LC173'>		<span class="p">}</span></div><div class='line' id='LC174'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div><div class='line' id='LC175'>		<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">gifAddFooter</span><span class="p">();</span></div><div class='line' id='LC176'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div><div class='line' id='LC177'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">gif</span><span class="p">;</span></div><div class='line' id='LC178'>	<span class="p">}</span></div><div class='line' id='LC179'>&nbsp;&nbsp;&nbsp;&nbsp;</div><div class='line' id='LC180'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// Internals</span></div><div class='line' id='LC181'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// ===================================================================================</span></div><div class='line' id='LC182'>&nbsp;&nbsp;&nbsp;&nbsp;</div><div class='line' id='LC183'>	<span class="sd">/**</span></div><div class='line' id='LC184'><span class="sd">     * Add the header gif string in its source (old: GIFAddHeader)</span></div><div class='line' id='LC185'><span class="sd">     */</span></div><div class='line' id='LC186'>	<span class="k">public</span> <span class="k">function</span> <span class="nf">gifAddHeader</span><span class="p">()</span></div><div class='line' id='LC187'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">{</span></div><div class='line' id='LC188'>		<span class="nv">$cmap</span> <span class="o">=</span> <span class="mi">0</span><span class="p">;</span></div><div class='line' id='LC189'><br/></div><div class='line' id='LC190'>		<span class="k">if</span> <span class="p">(</span><span class="nb">ord</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">frameSources</span><span class="p">[</span><span class="mi">0</span><span class="p">]</span> <span class="p">{</span> <span class="mi">10</span> <span class="p">})</span> <span class="o">&amp;</span> <span class="mh">0x80</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC191'><br/></div><div class='line' id='LC192'>			<span class="nv">$cmap</span> <span class="o">=</span> <span class="mi">3</span> <span class="o">*</span> <span class="p">(</span><span class="mi">2</span> <span class="o">&lt;&lt;</span> <span class="p">(</span><span class="nb">ord</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">frameSources</span><span class="p">[</span><span class="mi">0</span><span class="p">]</span> <span class="p">{</span> <span class="mi">10</span> <span class="p">})</span> <span class="o">&amp;</span> <span class="mh">0x07</span><span class="p">));</span></div><div class='line' id='LC193'><br/></div><div class='line' id='LC194'>			<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">gif</span> <span class="o">.=</span> <span class="nb">substr</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">frameSources</span><span class="p">[</span><span class="mi">0</span><span class="p">],</span> <span class="mi">6</span><span class="p">,</span> <span class="mi">7</span><span class="p">);</span></div><div class='line' id='LC195'>			<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">gif</span> <span class="o">.=</span> <span class="nb">substr</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">frameSources</span><span class="p">[</span><span class="mi">0</span><span class="p">],</span> <span class="mi">13</span><span class="p">,</span> <span class="nv">$cmap</span><span class="p">);</span></div><div class='line' id='LC196'>			<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">gif</span> <span class="o">.=</span> <span class="s2">&quot;!</span><span class="se">\377\13</span><span class="s2">NETSCAPE2.0</span><span class="se">\3\1</span><span class="s2">&quot;</span><span class="o">.</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">encodeAsciiToChar</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">loop</span><span class="p">)</span><span class="o">.</span><span class="s2">&quot;</span><span class="se">\0</span><span class="s2">&quot;</span><span class="p">;</span></div><div class='line' id='LC197'>		<span class="p">}</span></div><div class='line' id='LC198'>	<span class="p">}</span></div><div class='line' id='LC199'>&nbsp;&nbsp;&nbsp;&nbsp;</div><div class='line' id='LC200'>	<span class="sd">/**</span></div><div class='line' id='LC201'><span class="sd">     * Add the frame sources to the GIF string (old: GIFAddFrames)</span></div><div class='line' id='LC202'><span class="sd">     * </span></div><div class='line' id='LC203'><span class="sd">     * @param integer $i</span></div><div class='line' id='LC204'><span class="sd">     * @param integer $d</span></div><div class='line' id='LC205'><span class="sd">     */</span></div><div class='line' id='LC206'>	<span class="k">public</span> <span class="k">function</span> <span class="nf">addGifFrames</span><span class="p">(</span><span class="nv">$i</span><span class="p">,</span> <span class="nv">$d</span><span class="p">)</span></div><div class='line' id='LC207'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">{</span></div><div class='line' id='LC208'>		<span class="nv">$Locals_str</span> <span class="o">=</span> <span class="mi">13</span> <span class="o">+</span> <span class="mi">3</span> <span class="o">*</span> <span class="p">(</span><span class="mi">2</span> <span class="o">&lt;&lt;</span> <span class="p">(</span><span class="nb">ord</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">frameSources</span><span class="p">[</span> <span class="nv">$i</span> <span class="p">]</span> <span class="p">{</span> <span class="mi">10</span> <span class="p">})</span> <span class="o">&amp;</span> <span class="mh">0x07</span><span class="p">));</span></div><div class='line' id='LC209'><br/></div><div class='line' id='LC210'>		<span class="nv">$Locals_end</span> <span class="o">=</span> <span class="nb">strlen</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">frameSources</span><span class="p">[</span><span class="nv">$i</span><span class="p">])</span> <span class="o">-</span> <span class="nv">$Locals_str</span> <span class="o">-</span> <span class="mi">1</span><span class="p">;</span></div><div class='line' id='LC211'>		<span class="nv">$Locals_tmp</span> <span class="o">=</span> <span class="nb">substr</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">frameSources</span><span class="p">[</span><span class="nv">$i</span><span class="p">],</span> <span class="nv">$Locals_str</span><span class="p">,</span> <span class="nv">$Locals_end</span><span class="p">);</span></div><div class='line' id='LC212'><br/></div><div class='line' id='LC213'>		<span class="nv">$Global_len</span> <span class="o">=</span> <span class="mi">2</span> <span class="o">&lt;&lt;</span> <span class="p">(</span><span class="nb">ord</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">frameSources</span><span class="p">[</span><span class="mi">0</span> <span class="p">]</span> <span class="p">{</span> <span class="mi">10</span> <span class="p">})</span> <span class="o">&amp;</span> <span class="mh">0x07</span><span class="p">);</span></div><div class='line' id='LC214'>		<span class="nv">$Locals_len</span> <span class="o">=</span> <span class="mi">2</span> <span class="o">&lt;&lt;</span> <span class="p">(</span><span class="nb">ord</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">frameSources</span><span class="p">[</span><span class="nv">$i</span><span class="p">]</span> <span class="p">{</span> <span class="mi">10</span> <span class="p">})</span> <span class="o">&amp;</span> <span class="mh">0x07</span><span class="p">);</span></div><div class='line' id='LC215'><br/></div><div class='line' id='LC216'>		<span class="nv">$Global_rgb</span> <span class="o">=</span> <span class="nb">substr</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">frameSources</span><span class="p">[</span><span class="mi">0</span><span class="p">],</span> <span class="mi">13</span><span class="p">,</span> <span class="mi">3</span> <span class="o">*</span> <span class="p">(</span><span class="mi">2</span> <span class="o">&lt;&lt;</span> <span class="p">(</span><span class="nb">ord</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">frameSources</span><span class="p">[</span><span class="mi">0</span><span class="p">]</span> <span class="p">{</span> <span class="mi">10</span> <span class="p">})</span> <span class="o">&amp;</span> <span class="mh">0x07</span><span class="p">)));</span></div><div class='line' id='LC217'>		<span class="nv">$Locals_rgb</span> <span class="o">=</span> <span class="nb">substr</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">frameSources</span><span class="p">[</span><span class="nv">$i</span><span class="p">],</span> <span class="mi">13</span><span class="p">,</span> <span class="mi">3</span> <span class="o">*</span> <span class="p">(</span><span class="mi">2</span> <span class="o">&lt;&lt;</span> <span class="p">(</span><span class="nb">ord</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">frameSources</span><span class="p">[</span><span class="nv">$i</span><span class="p">]</span> <span class="p">{</span> <span class="mi">10</span> <span class="p">})</span> <span class="o">&amp;</span> <span class="mh">0x07</span><span class="p">)));</span></div><div class='line' id='LC218'><br/></div><div class='line' id='LC219'>		<span class="nv">$Locals_ext</span> <span class="o">=</span> <span class="s2">&quot;!</span><span class="se">\xF9\x04</span><span class="s2">&quot;</span><span class="o">.</span><span class="nb">chr</span><span class="p">((</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">dis</span> <span class="o">&lt;&lt;</span> <span class="mi">2</span><span class="p">)</span> <span class="o">+</span> <span class="mi">0</span><span class="p">)</span><span class="o">.</span><span class="nb">chr</span><span class="p">((</span><span class="nv">$d</span> <span class="o">&gt;&gt;</span> <span class="mi">0</span> <span class="p">)</span> <span class="o">&amp;</span> <span class="mh">0xFF</span><span class="p">)</span><span class="o">.</span><span class="nb">chr</span><span class="p">((</span><span class="nv">$d</span> <span class="o">&gt;&gt;</span> <span class="mi">8</span><span class="p">)</span> <span class="o">&amp;</span> <span class="mh">0xFF</span><span class="p">)</span><span class="o">.</span><span class="s2">&quot;</span><span class="se">\x0\x0</span><span class="s2">&quot;</span><span class="p">;</span></div><div class='line' id='LC220'><br/></div><div class='line' id='LC221'>		<span class="k">if</span> <span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">colour</span> <span class="o">&gt;</span> <span class="o">-</span><span class="mi">1</span> <span class="o">&amp;&amp;</span> <span class="nb">ord</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">frameSources</span><span class="p">[</span><span class="nv">$i</span><span class="p">]</span> <span class="p">{</span> <span class="mi">10</span> <span class="p">})</span> <span class="o">&amp;</span> <span class="mh">0x80</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC222'><br/></div><div class='line' id='LC223'>			<span class="k">for</span> <span class="p">(</span><span class="nv">$j</span> <span class="o">=</span> <span class="mi">0</span><span class="p">;</span> <span class="nv">$j</span> <span class="o">&lt;</span> <span class="p">(</span><span class="mi">2</span> <span class="o">&lt;&lt;</span> <span class="p">(</span><span class="nb">ord</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">frameSources</span><span class="p">[</span><span class="nv">$i</span><span class="p">]</span> <span class="p">{</span> <span class="mi">10</span> <span class="p">}</span> <span class="p">)</span> <span class="o">&amp;</span> <span class="mh">0x07</span><span class="p">));</span> <span class="nv">$j</span><span class="o">++</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC224'><br/></div><div class='line' id='LC225'>				<span class="k">if</span> <span class="p">(</span><span class="nb">ord</span><span class="p">(</span><span class="nv">$Locals_rgb</span> <span class="p">{</span> <span class="mi">3</span> <span class="o">*</span> <span class="nv">$j</span> <span class="o">+</span> <span class="mi">0</span> <span class="p">})</span> <span class="o">==</span> <span class="p">((</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">colour</span> <span class="o">&gt;&gt;</span> <span class="mi">16</span><span class="p">)</span> <span class="o">&amp;</span> <span class="mh">0xFF</span><span class="p">)</span> <span class="o">&amp;&amp;</span></div><div class='line' id='LC226'>					<span class="nb">ord</span><span class="p">(</span><span class="nv">$Locals_rgb</span> <span class="p">{</span> <span class="mi">3</span> <span class="o">*</span> <span class="nv">$j</span> <span class="o">+</span> <span class="mi">1</span> <span class="p">})</span> <span class="o">==</span> <span class="p">((</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">colour</span> <span class="o">&gt;&gt;</span> <span class="mi">8</span><span class="p">)</span> <span class="o">&amp;</span> <span class="mh">0xFF</span><span class="p">)</span> <span class="o">&amp;&amp;</span></div><div class='line' id='LC227'>					<span class="nb">ord</span><span class="p">(</span><span class="nv">$Locals_rgb</span> <span class="p">{</span> <span class="mi">3</span> <span class="o">*</span> <span class="nv">$j</span> <span class="o">+</span> <span class="mi">2</span> <span class="p">})</span> <span class="o">==</span> <span class="p">((</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">colour</span> <span class="o">&gt;&gt;</span> <span class="mi">0</span><span class="p">)</span> <span class="o">&amp;</span> <span class="mh">0xFF</span><span class="p">)</span></div><div class='line' id='LC228'>				<span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC229'>					<span class="nv">$Locals_ext</span> <span class="o">=</span> <span class="s2">&quot;!</span><span class="se">\xF9\x04</span><span class="s2">&quot;</span><span class="o">.</span><span class="nb">chr</span><span class="p">((</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">dis</span> <span class="o">&lt;&lt;</span> <span class="mi">2</span><span class="p">)</span> <span class="o">+</span> <span class="mi">1</span><span class="p">)</span><span class="o">.</span><span class="nb">chr</span><span class="p">((</span><span class="nv">$d</span> <span class="o">&gt;&gt;</span> <span class="mi">0</span><span class="p">)</span> <span class="o">&amp;</span> <span class="mh">0xFF</span><span class="p">)</span><span class="o">.</span><span class="nb">chr</span><span class="p">((</span><span class="nv">$d</span> <span class="o">&gt;&gt;</span> <span class="mi">8</span><span class="p">)</span> <span class="o">&amp;</span> <span class="mh">0xFF</span><span class="p">)</span><span class="o">.</span><span class="nb">chr</span><span class="p">(</span><span class="nv">$j</span><span class="p">)</span><span class="o">.</span><span class="s2">&quot;</span><span class="se">\x0</span><span class="s2">&quot;</span><span class="p">;</span></div><div class='line' id='LC230'>					<span class="k">break</span><span class="p">;</span></div><div class='line' id='LC231'>				<span class="p">}</span></div><div class='line' id='LC232'>			<span class="p">}</span></div><div class='line' id='LC233'>		<span class="p">}</span></div><div class='line' id='LC234'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div><div class='line' id='LC235'>		<span class="k">switch</span> <span class="p">(</span><span class="nv">$Locals_tmp</span> <span class="p">{</span> <span class="mi">0</span> <span class="p">})</span> <span class="p">{</span></div><div class='line' id='LC236'><br/></div><div class='line' id='LC237'>			<span class="k">case</span> <span class="s1">&#39;!&#39;</span><span class="o">:</span></div><div class='line' id='LC238'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div><div class='line' id='LC239'>				<span class="nv">$Locals_img</span> <span class="o">=</span> <span class="nb">substr</span><span class="p">(</span><span class="nv">$Locals_tmp</span><span class="p">,</span> <span class="mi">8</span><span class="p">,</span> <span class="mi">10</span><span class="p">);</span></div><div class='line' id='LC240'>				<span class="nv">$Locals_tmp</span> <span class="o">=</span> <span class="nb">substr</span><span class="p">(</span><span class="nv">$Locals_tmp</span><span class="p">,</span> <span class="mi">18</span><span class="p">,</span> <span class="nb">strlen</span><span class="p">(</span><span class="nv">$Locals_tmp</span><span class="p">)</span> <span class="o">-</span> <span class="mi">18</span><span class="p">);</span></div><div class='line' id='LC241'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div><div class='line' id='LC242'>			<span class="k">break</span><span class="p">;</span></div><div class='line' id='LC243'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div><div class='line' id='LC244'>			<span class="k">case</span> <span class="s1">&#39;,&#39;</span><span class="o">:</span></div><div class='line' id='LC245'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div><div class='line' id='LC246'>				<span class="nv">$Locals_img</span> <span class="o">=</span> <span class="nb">substr</span><span class="p">(</span><span class="nv">$Locals_tmp</span><span class="p">,</span> <span class="mi">0</span><span class="p">,</span> <span class="mi">10</span><span class="p">);</span></div><div class='line' id='LC247'>				<span class="nv">$Locals_tmp</span> <span class="o">=</span> <span class="nb">substr</span><span class="p">(</span><span class="nv">$Locals_tmp</span><span class="p">,</span> <span class="mi">10</span><span class="p">,</span> <span class="nb">strlen</span><span class="p">(</span><span class="nv">$Locals_tmp</span><span class="p">)</span> <span class="o">-</span> <span class="mi">10</span><span class="p">);</span></div><div class='line' id='LC248'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div><div class='line' id='LC249'>			<span class="k">break</span><span class="p">;</span></div><div class='line' id='LC250'>		<span class="p">}</span></div><div class='line' id='LC251'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div><div class='line' id='LC252'>		<span class="k">if</span> <span class="p">(</span><span class="nb">ord</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">frameSources</span><span class="p">[</span><span class="nv">$i</span><span class="p">]</span> <span class="p">{</span> <span class="mi">10</span> <span class="p">})</span> <span class="o">&amp;</span> <span class="mh">0x80</span> <span class="o">&amp;&amp;</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">imgBuilt</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC253'><br/></div><div class='line' id='LC254'>			<span class="k">if</span> <span class="p">(</span><span class="nv">$Global_len</span> <span class="o">==</span> <span class="nv">$Locals_len</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC255'><br/></div><div class='line' id='LC256'>				<span class="k">if</span> <span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">gifBlockCompare</span><span class="p">(</span><span class="nv">$Global_rgb</span><span class="p">,</span> <span class="nv">$Locals_rgb</span><span class="p">,</span> <span class="nv">$Global_len</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC257'><br/></div><div class='line' id='LC258'>					<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">gif</span> <span class="o">.=</span> <span class="nv">$Locals_ext</span><span class="o">.</span><span class="nv">$Locals_img</span><span class="o">.</span><span class="nv">$Locals_tmp</span><span class="p">;</span></div><div class='line' id='LC259'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div><div class='line' id='LC260'>				<span class="p">}</span> <span class="k">else</span> <span class="p">{</span></div><div class='line' id='LC261'><br/></div><div class='line' id='LC262'>					<span class="nv">$byte</span> <span class="o">=</span> <span class="nb">ord</span><span class="p">(</span><span class="nv">$Locals_img</span> <span class="p">{</span> <span class="mi">9</span> <span class="p">});</span></div><div class='line' id='LC263'>					<span class="nv">$byte</span> <span class="o">|=</span> <span class="mh">0x80</span><span class="p">;</span></div><div class='line' id='LC264'>					<span class="nv">$byte</span> <span class="o">&amp;=</span> <span class="mh">0xF8</span><span class="p">;</span></div><div class='line' id='LC265'>					<span class="nv">$byte</span> <span class="o">|=</span> <span class="p">(</span><span class="nb">ord</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">frameSources</span><span class="p">[</span><span class="mi">0</span><span class="p">]</span> <span class="p">{</span> <span class="mi">10</span> <span class="p">})</span> <span class="o">&amp;</span> <span class="mh">0x07</span><span class="p">);</span></div><div class='line' id='LC266'>					<span class="nv">$Locals_img</span> <span class="p">{</span> <span class="mi">9</span> <span class="p">}</span> <span class="o">=</span> <span class="nb">chr</span><span class="p">(</span><span class="nv">$byte</span><span class="p">);</span></div><div class='line' id='LC267'>					<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">gif</span> <span class="o">.=</span> <span class="nv">$Locals_ext</span><span class="o">.</span><span class="nv">$Locals_img</span><span class="o">.</span><span class="nv">$Locals_rgb</span><span class="o">.</span><span class="nv">$Locals_tmp</span><span class="p">;</span></div><div class='line' id='LC268'>				<span class="p">}</span></div><div class='line' id='LC269'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div><div class='line' id='LC270'>			<span class="p">}</span> <span class="k">else</span> <span class="p">{</span></div><div class='line' id='LC271'><br/></div><div class='line' id='LC272'>				<span class="nv">$byte</span> <span class="o">=</span> <span class="nb">ord</span><span class="p">(</span><span class="nv">$Locals_img</span> <span class="p">{</span> <span class="mi">9</span> <span class="p">});</span></div><div class='line' id='LC273'>				<span class="nv">$byte</span> <span class="o">|=</span> <span class="mh">0x80</span><span class="p">;</span></div><div class='line' id='LC274'>				<span class="nv">$byte</span> <span class="o">&amp;=</span> <span class="mh">0xF8</span><span class="p">;</span></div><div class='line' id='LC275'>				<span class="nv">$byte</span> <span class="o">|=</span> <span class="p">(</span><span class="nb">ord</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">frameSources</span><span class="p">[</span><span class="nv">$i</span><span class="p">]</span> <span class="p">{</span> <span class="mi">10</span> <span class="p">})</span> <span class="o">&amp;</span> <span class="mh">0x07</span><span class="p">);</span></div><div class='line' id='LC276'>				<span class="nv">$Locals_img</span> <span class="p">{</span> <span class="mi">9</span> <span class="p">}</span> <span class="o">=</span> <span class="nb">chr</span><span class="p">(</span><span class="nv">$byte</span><span class="p">);</span></div><div class='line' id='LC277'>				<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">gif</span> <span class="o">.=</span> <span class="nv">$Locals_ext</span><span class="o">.</span><span class="nv">$Locals_img</span><span class="o">.</span><span class="nv">$Locals_rgb</span><span class="o">.</span><span class="nv">$Locals_tmp</span><span class="p">;</span></div><div class='line' id='LC278'>			<span class="p">}</span></div><div class='line' id='LC279'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div><div class='line' id='LC280'>		<span class="p">}</span> <span class="k">else</span> <span class="p">{</span></div><div class='line' id='LC281'><br/></div><div class='line' id='LC282'>			<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">gif</span> <span class="o">.=</span> <span class="nv">$Locals_ext</span><span class="o">.</span><span class="nv">$Locals_img</span><span class="o">.</span><span class="nv">$Locals_tmp</span><span class="p">;</span></div><div class='line' id='LC283'>		<span class="p">}</span></div><div class='line' id='LC284'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div><div class='line' id='LC285'>		<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">imgBuilt</span> <span class="o">=</span> <span class="k">true</span><span class="p">;</span></div><div class='line' id='LC286'>	<span class="p">}</span></div><div class='line' id='LC287'>&nbsp;&nbsp;&nbsp;&nbsp;</div><div class='line' id='LC288'>	<span class="sd">/**</span></div><div class='line' id='LC289'><span class="sd">     * Add the gif string footer char (old: GIFAddFooter)</span></div><div class='line' id='LC290'><span class="sd">     */</span></div><div class='line' id='LC291'>	<span class="k">public</span> <span class="k">function</span> <span class="nf">gifAddFooter</span><span class="p">()</span></div><div class='line' id='LC292'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">{</span></div><div class='line' id='LC293'>		<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">gif</span> <span class="o">.=</span> <span class="s1">&#39;;&#39;</span><span class="p">;</span></div><div class='line' id='LC294'>	<span class="p">}</span></div><div class='line' id='LC295'>&nbsp;&nbsp;&nbsp;&nbsp;</div><div class='line' id='LC296'>	<span class="sd">/**</span></div><div class='line' id='LC297'><span class="sd">     * Compare two block and return the version (old: GIFBlockCompare)</span></div><div class='line' id='LC298'><span class="sd">     * </span></div><div class='line' id='LC299'><span class="sd">     * @param string $globalBlock</span></div><div class='line' id='LC300'><span class="sd">     * @param string $localBlock</span></div><div class='line' id='LC301'><span class="sd">     * @param integer $length</span></div><div class='line' id='LC302'><span class="sd">     * </span></div><div class='line' id='LC303'><span class="sd">     * @return integer</span></div><div class='line' id='LC304'><span class="sd">	 */</span></div><div class='line' id='LC305'>	<span class="k">public</span> <span class="k">function</span> <span class="nf">gifBlockCompare</span><span class="p">(</span><span class="nv">$globalBlock</span><span class="p">,</span> <span class="nv">$localBlock</span><span class="p">,</span> <span class="nv">$length</span><span class="p">)</span></div><div class='line' id='LC306'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">{</span></div><div class='line' id='LC307'>		<span class="k">for</span> <span class="p">(</span><span class="nv">$i</span> <span class="o">=</span> <span class="mi">0</span><span class="p">;</span> <span class="nv">$i</span> <span class="o">&lt;</span> <span class="nv">$length</span><span class="p">;</span> <span class="nv">$i</span><span class="o">++</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC308'><br/></div><div class='line' id='LC309'>			<span class="k">if</span> <span class="p">(</span><span class="nv">$globalBlock</span> <span class="p">{</span> <span class="mi">3</span> <span class="o">*</span> <span class="nv">$i</span> <span class="o">+</span> <span class="mi">0</span> <span class="p">}</span> <span class="o">!=</span> <span class="nv">$localBlock</span> <span class="p">{</span> <span class="mi">3</span> <span class="o">*</span> <span class="nv">$i</span> <span class="o">+</span> <span class="mi">0</span> <span class="p">}</span> <span class="o">||</span></div><div class='line' id='LC310'>				<span class="nv">$globalBlock</span> <span class="p">{</span> <span class="mi">3</span> <span class="o">*</span> <span class="nv">$i</span> <span class="o">+</span> <span class="mi">1</span> <span class="p">}</span> <span class="o">!=</span> <span class="nv">$localBlock</span> <span class="p">{</span> <span class="mi">3</span> <span class="o">*</span> <span class="nv">$i</span> <span class="o">+</span> <span class="mi">1</span> <span class="p">}</span> <span class="o">||</span></div><div class='line' id='LC311'>				<span class="nv">$globalBlock</span> <span class="p">{</span> <span class="mi">3</span> <span class="o">*</span> <span class="nv">$i</span> <span class="o">+</span> <span class="mi">2</span> <span class="p">}</span> <span class="o">!=</span> <span class="nv">$localBlock</span> <span class="p">{</span> <span class="mi">3</span> <span class="o">*</span> <span class="nv">$i</span> <span class="o">+</span> <span class="mi">2</span> <span class="p">})</span> <span class="p">{</span></div><div class='line' id='LC312'><br/></div><div class='line' id='LC313'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="mi">0</span><span class="p">;</span></div><div class='line' id='LC314'>			<span class="p">}</span></div><div class='line' id='LC315'>		<span class="p">}</span></div><div class='line' id='LC316'><br/></div><div class='line' id='LC317'>		<span class="k">return</span> <span class="mi">1</span><span class="p">;</span></div><div class='line' id='LC318'>	<span class="p">}</span></div><div class='line' id='LC319'>&nbsp;&nbsp;&nbsp;&nbsp;</div><div class='line' id='LC320'>	<span class="sd">/**</span></div><div class='line' id='LC321'><span class="sd">     * Encode an ASCII char into a string char (old: GIFWord)</span></div><div class='line' id='LC322'><span class="sd">     * </span></div><div class='line' id='LC323'><span class="sd">     * $param integer $char ASCII char</span></div><div class='line' id='LC324'><span class="sd">     * </span></div><div class='line' id='LC325'><span class="sd">     * @return string</span></div><div class='line' id='LC326'><span class="sd">	 */</span></div><div class='line' id='LC327'>	<span class="k">public</span> <span class="k">function</span> <span class="nf">encodeAsciiToChar</span><span class="p">(</span><span class="nv">$char</span><span class="p">)</span></div><div class='line' id='LC328'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">{</span></div><div class='line' id='LC329'>		<span class="k">return</span> <span class="p">(</span><span class="nb">chr</span><span class="p">(</span><span class="nv">$char</span> <span class="o">&amp;</span> <span class="mh">0xFF</span><span class="p">)</span><span class="o">.</span><span class="nb">chr</span><span class="p">((</span><span class="nv">$char</span> <span class="o">&gt;&gt;</span> <span class="mi">8</span><span class="p">)</span> <span class="o">&amp;</span> <span class="mh">0xFF</span><span class="p">));</span></div><div class='line' id='LC330'>	<span class="p">}</span></div><div class='line' id='LC331'>&nbsp;&nbsp;&nbsp;&nbsp;</div><div class='line' id='LC332'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC333'><span class="sd">     * Reset and clean the current object</span></div><div class='line' id='LC334'><span class="sd">     */</span></div><div class='line' id='LC335'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">reset</span><span class="p">()</span></div><div class='line' id='LC336'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">{</span></div><div class='line' id='LC337'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">frameSources</span><span class="p">;</span></div><div class='line' id='LC338'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">gif</span> <span class="o">=</span> <span class="s1">&#39;GIF89a&#39;</span><span class="p">;</span> <span class="c1">// the GIF header</span></div><div class='line' id='LC339'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">imgBuilt</span> <span class="o">=</span> <span class="k">false</span><span class="p">;</span></div><div class='line' id='LC340'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">loop</span> <span class="o">=</span> <span class="mi">0</span><span class="p">;</span></div><div class='line' id='LC341'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">dis</span> <span class="o">=</span> <span class="mi">2</span><span class="p">;</span></div><div class='line' id='LC342'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">colour</span> <span class="o">=</span> <span class="o">-</span><span class="mi">1</span><span class="p">;</span></div><div class='line' id='LC343'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC344'>&nbsp;&nbsp;&nbsp;&nbsp;</div><div class='line' id='LC345'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// Getter / Setter</span></div><div class='line' id='LC346'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// ===================================================================================</span></div><div class='line' id='LC347'>&nbsp;&nbsp;&nbsp;&nbsp;</div><div class='line' id='LC348'>	<span class="sd">/**</span></div><div class='line' id='LC349'><span class="sd">     * Get the final GIF image string (old: GetAnimation)</span></div><div class='line' id='LC350'><span class="sd">     * </span></div><div class='line' id='LC351'><span class="sd">     * @return string</span></div><div class='line' id='LC352'><span class="sd">	 */</span></div><div class='line' id='LC353'>	<span class="k">public</span> <span class="k">function</span> <span class="nf">getGif</span><span class="p">()</span></div><div class='line' id='LC354'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">{</span></div><div class='line' id='LC355'>		<span class="k">return</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">gif</span><span class="p">;</span></div><div class='line' id='LC356'>	<span class="p">}</span></div><div class='line' id='LC357'><span class="p">}</span></div></pre></div></td>
         </tr>
       </table>
  </div>

  </div>
</div>

<a href="#jump-to-line" rel="facebox[.linejump]" data-hotkey="l" class="js-jump-to-line" style="display:none">Jump to Line</a>
<div id="jump-to-line" style="display:none">
  <form accept-charset="UTF-8" class="js-jump-to-line-form">
    <input class="linejump-input js-jump-to-line-field" type="text" placeholder="Jump to line&hellip;" autofocus>
    <button type="submit" class="button">Go</button>
  </form>
</div>

        </div>

      </div><!-- /.repo-container -->
      <div class="modal-backdrop"></div>
    </div><!-- /.container -->
  </div><!-- /.site -->


    </div><!-- /.wrapper -->

      <div class="container">
  <div class="site-footer">
    <ul class="site-footer-links right">
      <li><a href="https://status.github.com/">Status</a></li>
      <li><a href="http://developer.github.com">API</a></li>
      <li><a href="http://training.github.com">Training</a></li>
      <li><a href="http://shop.github.com">Shop</a></li>
      <li><a href="/blog">Blog</a></li>
      <li><a href="/about">About</a></li>

    </ul>

    <a href="/">
      <span class="mega-octicon octicon-mark-github" title="GitHub"></span>
    </a>

    <ul class="site-footer-links">
      <li>&copy; 2014 <span title="0.05164s from github-fe116-cp1-prd.iad.github.net">GitHub</span>, Inc.</li>
        <li><a href="/site/terms">Terms</a></li>
        <li><a href="/site/privacy">Privacy</a></li>
        <li><a href="/security">Security</a></li>
        <li><a href="/contact">Contact</a></li>
    </ul>
  </div><!-- /.site-footer -->
</div><!-- /.container -->


    <div class="fullscreen-overlay js-fullscreen-overlay" id="fullscreen_overlay">
  <div class="fullscreen-container js-fullscreen-container">
    <div class="textarea-wrap">
      <textarea name="fullscreen-contents" id="fullscreen-contents" class="fullscreen-contents js-fullscreen-contents" placeholder="" data-suggester="fullscreen_suggester"></textarea>
    </div>
  </div>
  <div class="fullscreen-sidebar">
    <a href="#" class="exit-fullscreen js-exit-fullscreen tooltipped tooltipped-w" aria-label="Exit Zen Mode">
      <span class="mega-octicon octicon-screen-normal"></span>
    </a>
    <a href="#" class="theme-switcher js-theme-switcher tooltipped tooltipped-w"
      aria-label="Switch themes">
      <span class="octicon octicon-color-mode"></span>
    </a>
  </div>
</div>



    <div id="ajax-error-message" class="flash flash-error">
      <span class="octicon octicon-alert"></span>
      <a href="#" class="octicon octicon-x close js-ajax-error-dismiss" aria-label="Dismiss error"></a>
      Something went wrong with that request. Please try again.
    </div>


      <script crossorigin="anonymous" src="https://assets-cdn.github.com/assets/frameworks-66f40787248d40d8457b357437c30ec844b57b28.js" type="text/javascript"></script>
      <script async="async" crossorigin="anonymous" src="https://assets-cdn.github.com/assets/github-140aa9c34f570c06ca872670bcf98026f3e962db.js" type="text/javascript"></script>
      
      
        <script async src="https://www.google-analytics.com/analytics.js"></script>
  </body>
</html>

