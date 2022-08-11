/**
 *
 * Scripts
 *
 * Initialization of the template base and page scripts.
 *
 *
 */

 class Scripts {
  constructor() {
    this._initSettings();
    this._initVariables();
    this._addListeners();
    this._init();
  }

  // Showing the template after waiting for a bit so that the css variables are all set
  // Initialization of the common scripts and page specific ones
  _init() {
    setTimeout(() => {
      document.documentElement.setAttribute('data-show', 'true');
      document.body.classList.remove('spinner');
      this._initBase();
      this._initCommon();
      this._initPages();
    }, 100);
  }

  // Base scripts initialization
  _initBase() {
    // Navigation
    if (typeof Nav !== 'undefined') {
      const nav = new Nav(document.getElementById('nav'));
    }

    // Search implementation
    if (typeof Search !== 'undefined') {
      const search = new Search();
    }

    // AcornIcons initialization
    if (typeof AcornIcons !== 'undefined') {
      new AcornIcons().replace();
    }
  }

  // Common plugins and overrides initialization
  _initCommon() {
    // common.js initialization
    if (typeof Common !== 'undefined') {
      let common = new Common();
    }
  }

  // Pages initialization
  _initPages() {
    // account.settings.js initialization
    if (typeof AccountSettings !== 'undefined') {
      const accountSettings = new AccountSettings();
    }
    // dashboard.analysis.js initialization
    if (typeof Analysis !== 'undefined') {
      const analysis = new Analysis();
    }
    // communitylist.js initialization
    if (typeof Communitylist !== 'undefined') {
      const communityList = new Communitylist();
    }
    // services.database.js initialization
    if (typeof ServicesDatabase !== 'undefined') {
      const servicesDatabase = new ServicesDatabase();
    }
    // services.databaseadd.js initialization
    if (typeof ServicesDatabaseAdd !== 'undefined') {
      const servicesDatabaseAdd = new ServicesDatabaseAdd();
    }
    // services.databasedetail.js initialization
    if (typeof ServicesDatabaseDetail !== 'undefined') {
      const servicesDatabaseDetail = new ServicesDatabaseDetail();
    }
    // services.storage.js initialization
    if (typeof ServicesStorage !== 'undefined') {
      const servicesStorage = new ServicesStorage();
    }
    // support.docs.js initialization
    if (typeof SupportDocs !== 'undefined') {
      const supportDocs = new SupportDocs();
    }
    // support.ticketsdetail.js initialization
    if (typeof SupportTicketsDetail !== 'undefined') {
      const supportTicketsDetail = new SupportTicketsDetail();
    }

    if (typeof Checkall !== 'undefined') {
      new Checkall(document.getElementById('checkAllforCheckboxTable'));
    }
  }

  // Settings initialization
  _initSettings() {
    if (typeof Settings !== 'undefined') {
      const settings = new Settings({attributes: {placement: 'horizontal', layout: 'boxed', color: 'light-blue', navcolor: 'light' }, showSettings: true, storagePrefix: 'plats-action-hub-'});
    }
  }

  // Variables initialization of Globals.js file which contains valus from css
  _initVariables() {
    if (typeof Variables !== 'undefined') {
      const variables = new Variables();
    }
  }

  // Listeners of menu and layout changes which fires a resize event
  _addListeners() {
    document.documentElement.addEventListener(Globals.menuPlacementChange, (event) => {
      setTimeout(() => {
        window.dispatchEvent(new Event('resize'));
      }, 25);
    });

    document.documentElement.addEventListener(Globals.layoutChange, (event) => {
      setTimeout(() => {
        window.dispatchEvent(new Event('resize'));
      }, 25);
    });

    document.documentElement.addEventListener(Globals.menuBehaviourChange, (event) => {
      setTimeout(() => {
        window.dispatchEvent(new Event('resize'));
      }, 25);
    });
  }
}

// Shows the template after initialization of the settings, nav, variables and common plugins.
(function () {
  window.addEventListener('DOMContentLoaded', () => {
    // Initializing of the Scripts
    if (typeof Scripts !== 'undefined') {
      const scripts = new Scripts();
    }
  });
})();

// Disabling dropzone auto discover before DOMContentLoaded
(function () {
  if (typeof Dropzone !== 'undefined') {
    Dropzone.autoDiscover = false;
  }
})();
