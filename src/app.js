import React from "react";
import ReactDOM from "react-dom";
import ExampleReactComponent from './js/components/ExampleReactComponent';

document.addEventListener('DOMContentLoaded', () => {
  /**
   * Example React Component
   */
  if (document.querySelector('[data-example-react-component]')) {
    const exampleReactComponents = document.querySelectorAll('[data-example-react-component]');
    [...exampleReactComponents].map(el => ReactDOM.render(<ExampleReactComponent />, el));
  }
});
