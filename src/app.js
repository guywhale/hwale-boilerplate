import ExampleReactComponent from "./js/components/ExampleReactComponent";
import React from "react";
import ReactDOM from "react-dom";

document.addEventListener('DOMContentLoaded', () => {
  if (document.querySelector('[data-example-react-component]')) {
    ReactDOM.render(<ExampleReactComponent />, document.querySelector('[data-example-react-component]'));
  }
});
