'use strict';

const path = require('path');

/**
 * @param {import('vscode').ExtensionContext} context
 */
function activate(context) {
    const vscode = require('vscode');

    // Point to stubs directory within the extension itself
    const stubDir = path.join(context.extensionPath, 'stubs');

    // Add stubs to Intelephense include paths
    try {
        const config = vscode.workspace.getConfiguration();
        const includePaths = config.get('intelephense.environment.includePaths') || [];
        
        if (!includePaths.includes(stubDir)) {
            includePaths.push(stubDir);
            config.update('intelephense.environment.includePaths', includePaths, vscode.ConfigurationTarget.Workspace).then(() => {
                vscode.window.showInformationMessage('Pest autocomplete: configured IDE stubs. Reload window to re-index?', 'Reload Window').then((action) => {
                    if (action === 'Reload Window') {
                        vscode.commands.executeCommand('workbench.action.reloadWindow');
                    }
                });
            });
        }
    } catch (_) {}
}

function deactivate() {}

module.exports = { activate, deactivate };
