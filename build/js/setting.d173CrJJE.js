/*! For license information please see setting.d173CrJJE.js.LICENSE.txt */
!function(){const e=PRHelper.getType(),t=PRHelper.getHTML(),n=PRHelper.getHook(),o=PRHelper.getSetting();function a(){let n=t.getElement("#subdomain_taxonomy"),a=o.getOption(`taxonomies_objects.${t.getValue(n)}`);e.each(a,(e=>{let n=t.getElement(`[data-field-id=subdomain_taxonomy_objects] input[data-value=${e}]`);t.isElement(n)&&(t.setElementActivity(t.getParent(n)),t.setProp(n,"checked",!0))}))}a(),n.on("change",(function(n){e.each(t.getElements("[data-field-id=subdomain_taxonomy_objects] input"),(e=>{t.setElementActivity(t.getParent(e),!0),t.setProp(e,"checked",!1)})),a()}),"#subdomain_taxonomy")}();