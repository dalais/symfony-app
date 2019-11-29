import React from "react";
import ReactDOM from "react-dom";
import { Provider } from "react-redux";
import {createStore, applyMiddleware } from "redux";
import { composeWithDevTools } from "redux-devtools-extension";
import thunk from "redux-thunk";
import rootReducer from "./store/reducers";

const store = createStore(rootReducer, composeWithDevTools(applyMiddleware(thunk)));

import App from "./components/App";

ReactDOM.render(
<Provider store={store}>
    <App/>
    </Provider>,
document.getElementById("root")
);