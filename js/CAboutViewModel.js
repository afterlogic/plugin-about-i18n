function CAboutViewModel()
{
	this.count = ko.observable(0);
}

CAboutViewModel.prototype.TemplateName = 'Plugin_AboutTemplate';
CAboutViewModel.prototype.TabName = 'about';
CAboutViewModel.prototype.TabTitle = AfterLogicApi.i18n('PLUGIN_ABOUT/TAB_NAME');

CAboutViewModel.prototype.clickSampleButtom = function () {
	this.count(this.count() + 1);
};

AfterLogicApi.addSettingsTab(CAboutViewModel);
