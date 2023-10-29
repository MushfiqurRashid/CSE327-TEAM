<?php // generated by https://www.devsense.com/

/**
 * Start new or resume existing session
 * session_start() creates a session or resumes the current one based on a session identifier passed via a GET or POST request, or passed via a cookie.
 *
 * @param array|null $options If provided, this is an associative array of options that will override the currently set session configuration directives . The keys should not include the `session.` prefix. In addition to the normal set of configuration directives, a `read_and_close` option may also be provided. If set to `true` , this will result in the session being closed immediately after being read, thereby avoiding unnecessary locking if the session data won't be changed.
 * @return bool This function returns `true` if a session was successfully started, otherwise `false` .
 */
function session_start($options = []): bool { /* function body is hidden */ }