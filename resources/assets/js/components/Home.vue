<template>
    <nav class="panel column is-offset-2 is-8">
        <p class="panel-heading">Phonebook</p>
        <div class="panel-block">
            <p class="control has-icons-left">
                <input class="input is-small" type="text" placeholder="search">
                <span class="icon is-small is-left">
                    <i class="fa fa-search"></i>
                </span>
            </p>
        </div>
        <p class="panel-tabs">
            <a class="is-active">all</a>
            <a>public</a>
            <a>private</a>
            <a>sources</a>
            <a>forks</a>
        </p>
        <a class="panel-block is-active">
            <span class="panel-icon">
                <i class="fa fa-book"></i>
            </span>
            bulma
        </a>
        <a class="panel-block">
            <span class="panel-icon">
              <i class="fa fa-book"></i>
            </span>
            marksheet
        </a>
        <a class="panel-block">
            <span class="panel-icon">
              <i class="fa fa-book"></i>
            </span>
            minireset.css
        </a>
        <a class="panel-block">
            <span class="panel-icon">
              <i class="fa fa-book"></i>
            </span>
            jgthms.github.io
        </a>
        <a class="panel-block">
            <span class="panel-icon">
              <i class="fa fa-code-fork"></i>
            </span>
            daniellowtw/infboard
        </a>
        <a class="panel-block">
            <span class="panel-icon">
              <i class="fa fa-code-fork"></i>
            </span>
            mojs
        </a>
        <label class="panel-block">
            <input type="checkbox">
            remember me
        </label>
        <div class="panel-block">
            <button class="button is-link is-outlined is-fullwidth">
                reset all filters
            </button>
        </div>
    </nav>
</template>