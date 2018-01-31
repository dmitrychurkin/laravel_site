
interface Size {
  offsetWidth: number;
  offsetHeight: number;
}

class PluginBaseProps {
  CONTAINER? = '#cards';
  ALIGN?: 'CENTER' | 'LEFT' | 'RIGHT' = 'CENTER';
  ATTRIBUTE? = 'data-card-js';
  GUTTERS? = 5;
  PADDING_LEFT? = 20;
  PADDING_TOP? = 0;
  PADDING_RIGHT? = 20;
  PADDING_BOTTOM? = 0;
}

class CardLayout extends PluginBaseProps {

  private _layout: Map<number, Size>;
  private _container_height = 0;
  private _columnCount = 0;

  constructor(options?: PluginBaseProps) {
    super();
    
    
  }
  private _setup(options: PluginBaseProps) {
    this._assignProps(options);

  }
  
  private get _cards_container() {
    let container = document.getElementById(this.CONTAINER!);
    /*if (!this._cards_container) {
      const errorMessage = 'PLEASE SPECIFY CONTAINER'
      console.error(errorMessage) || alert(errorMessage);
    }*/
    return container;
  }
  private _writeCardSize(cardNumber: number, { offsetWidth, offsetHeight }: HTMLElement) {
    if ( !(this._layout instanceof Map) ) {
      this._layout = new Map();
    }else {
      if (!this._layout.has(cardNumber)) {
        this._layout.set(cardNumber, { offsetWidth, offsetHeight });
      }
    }
    return this;
  }
  private _assignProps(options: PluginBaseProps | undefined): CardLayout {
    if (typeof options === 'object') {
      return Object.assign(this, options)
    }
    return this;
  }
}

let a = new CardLayout();
console.log(a);
