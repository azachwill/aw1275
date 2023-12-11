!(function () {
    var e = {
            n: function (t) {
                var r =
                    t && t.__esModule
                        ? function () {
                              return t.default
                          }
                        : function () {
                              return t
                          }
                return e.d(r, { a: r }), r
            },
            d: function (t, r) {
                for (var n in r) e.o(r, n) && !e.o(t, n) && Object.defineProperty(t, n, { enumerable: !0, get: r[n] })
            },
            o: function (e, t) {
                return Object.prototype.hasOwnProperty.call(e, t)
            },
            r: function (e) {
                'undefined' != typeof Symbol &&
                    Symbol.toStringTag &&
                    Object.defineProperty(e, Symbol.toStringTag, { value: 'Module' }),
                    Object.defineProperty(e, '__esModule', { value: !0 })
            },
        },
        t = {}
    !(function () {
        'use strict'
        e.r(t),
            e.d(t, {
                downloadDataCSV: function () {
                    return qi
                },
                getDataCSV: function () {
                    return Zi
                },
                getInstance: function () {
                    return _i
                },
                getState: function () {
                    return Li
                },
                onStateChange: function () {
                    return rl
                },
                setAllFilters: function () {
                    return $i
                },
                setData: function () {
                    return tl
                },
                setFilter: function () {
                    return Vi
                },
                setGroupBy: function () {
                    return Xi
                },
                setHiddenColumns: function () {
                    return el
                },
                setMeta: function () {
                    return Yi
                },
                setSearch: function () {
                    return Ui
                },
                toggleAllRowsExpanded: function () {
                    return Ji
                },
                toggleGroupBy: function () {
                    return Ki
                },
                toggleHideColumn: function () {
                    return Qi
                },
            })
        var r = {}
        e.r(r),
            e.d(r, {
                between: function () {
                    return it
                },
                equals: function () {
                    return at
                },
                exact: function () {
                    return ot
                },
                exactText: function () {
                    return Ye
                },
                exactTextCase: function () {
                    return Qe
                },
                includes: function () {
                    return et
                },
                includesAll: function () {
                    return tt
                },
                includesSome: function () {
                    return rt
                },
                includesValue: function () {
                    return nt
                },
                text: function () {
                    return Ze
                },
            })
        var n = {}
        e.r(n),
            e.d(n, {
                average: function () {
                    return At
                },
                count: function () {
                    return Nt
                },
                max: function () {
                    return Et
                },
                median: function () {
                    return xt
                },
                min: function () {
                    return Pt
                },
                minMax: function () {
                    return Ct
                },
                sum: function () {
                    return jt
                },
                unique: function () {
                    return kt
                },
                uniqueCount: function () {
                    return It
                },
            })
        var o = {}
        e.r(o),
            e.d(o, {
                alphanumeric: function () {
                    return Gt
                },
                basic: function () {
                    return Mt
                },
                datetime: function () {
                    return zt
                },
                number: function () {
                    return Wt
                },
                string: function () {
                    return Tt
                },
            })
        var a = window.React,
            i = e.n(a),
            l = window.ReactDOM,
            u = e.n(l)
        function c(e, t) {
            ;(null == t || t > e.length) && (t = e.length)
            for (var r = 0, n = new Array(t); r < t; r++) n[r] = e[r]
            return n
        }
        function s(e, t) {
            if ('string' == typeof t) return t
            if (t.name[0] === t.name[0].toUpperCase() && !e[t.name]) throw new Error('Unknown component: ' + t.name)
            var r,
                n = [e[t.name] || t.name, t.attribs],
                o = (function (e, t) {
                    var r = ('undefined' != typeof Symbol && e[Symbol.iterator]) || e['@@iterator']
                    if (!r) {
                        if (
                            Array.isArray(e) ||
                            (r = (function (e, t) {
                                if (e) {
                                    if ('string' == typeof e) return c(e, t)
                                    var r = Object.prototype.toString.call(e).slice(8, -1)
                                    return (
                                        'Object' === r && e.constructor && (r = e.constructor.name),
                                        'Map' === r || 'Set' === r
                                            ? Array.from(e)
                                            : 'Arguments' === r || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(r)
                                            ? c(e, t)
                                            : void 0
                                    )
                                }
                            })(e)) ||
                            (t && e && 'number' == typeof e.length)
                        ) {
                            r && (e = r)
                            var n = 0,
                                o = function () {}
                            return {
                                s: o,
                                n: function () {
                                    return n >= e.length ? { done: !0 } : { done: !1, value: e[n++] }
                                },
                                e: function (e) {
                                    throw e
                                },
                                f: o,
                            }
                        }
                        throw new TypeError(
                            'Invalid attempt to iterate non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.',
                        )
                    }
                    var a,
                        i = !0,
                        l = !1
                    return {
                        s: function () {
                            r = r.call(e)
                        },
                        n: function () {
                            var e = r.next()
                            return (i = e.done), e
                        },
                        e: function (e) {
                            ;(l = !0), (a = e)
                        },
                        f: function () {
                            try {
                                i || null == r.return || r.return()
                            } finally {
                                if (l) throw a
                            }
                        },
                    }
                })(t.children)
            try {
                for (o.s(); !(r = o.n()).done; ) {
                    var a = r.value
                    n.push(s(e, a))
                }
            } catch (e) {
                o.e(e)
            } finally {
                o.f()
            }
            return i().createElement.apply(i(), n)
        }
        var f = ['style', 'className']
        function d(e) {
            return (
                (d =
                    'function' == typeof Symbol && 'symbol' == typeof Symbol.iterator
                        ? function (e) {
                              return typeof e
                          }
                        : function (e) {
                              return e &&
                                  'function' == typeof Symbol &&
                                  e.constructor === Symbol &&
                                  e !== Symbol.prototype
                                  ? 'symbol'
                                  : typeof e
                          }),
                d(e)
            )
        }
        function p(e) {
            return (
                (function (e) {
                    if (Array.isArray(e)) return g(e)
                })(e) ||
                (function (e) {
                    if (('undefined' != typeof Symbol && null != e[Symbol.iterator]) || null != e['@@iterator'])
                        return Array.from(e)
                })(e) ||
                (function (e, t) {
                    if (e) {
                        if ('string' == typeof e) return g(e, t)
                        var r = Object.prototype.toString.call(e).slice(8, -1)
                        return (
                            'Object' === r && e.constructor && (r = e.constructor.name),
                            'Map' === r || 'Set' === r
                                ? Array.from(e)
                                : 'Arguments' === r || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(r)
                                ? g(e, t)
                                : void 0
                        )
                    }
                })(e) ||
                (function () {
                    throw new TypeError(
                        'Invalid attempt to spread non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.',
                    )
                })()
            )
        }
        function g(e, t) {
            ;(null == t || t > e.length) && (t = e.length)
            for (var r = 0, n = new Array(t); r < t; r++) n[r] = e[r]
            return n
        }
        function y(e, t) {
            var r = Object.keys(e)
            if (Object.getOwnPropertySymbols) {
                var n = Object.getOwnPropertySymbols(e)
                t &&
                    (n = n.filter(function (t) {
                        return Object.getOwnPropertyDescriptor(e, t).enumerable
                    })),
                    r.push.apply(r, n)
            }
            return r
        }
        function m(e) {
            for (var t = 1; t < arguments.length; t++) {
                var r = null != arguments[t] ? arguments[t] : {}
                t % 2
                    ? y(Object(r), !0).forEach(function (t) {
                          h(e, t, r[t])
                      })
                    : Object.getOwnPropertyDescriptors
                    ? Object.defineProperties(e, Object.getOwnPropertyDescriptors(r))
                    : y(Object(r)).forEach(function (t) {
                          Object.defineProperty(e, t, Object.getOwnPropertyDescriptor(r, t))
                      })
            }
            return e
        }
        function h(e, t, r) {
            return (
                t in e
                    ? Object.defineProperty(e, t, { value: r, enumerable: !0, configurable: !0, writable: !0 })
                    : (e[t] = r),
                e
            )
        }
        function b(e, t) {
            if (null == e) return {}
            var r,
                n,
                o = (function (e, t) {
                    if (null == e) return {}
                    var r,
                        n,
                        o = {},
                        a = Object.keys(e)
                    for (n = 0; n < a.length; n++) (r = a[n]), t.indexOf(r) >= 0 || (o[r] = e[r])
                    return o
                })(e, t)
            if (Object.getOwnPropertySymbols) {
                var a = Object.getOwnPropertySymbols(e)
                for (n = 0; n < a.length; n++)
                    (r = a[n]), t.indexOf(r) >= 0 || (Object.prototype.propertyIsEnumerable.call(e, r) && (o[r] = e[r]))
            }
            return o
        }
        var v = 'Renderer Error ☝️',
            w = { init: 'init' },
            S = function () {
                return i().createElement(i().Fragment, null, ' ')
            },
            O = {
                Cell: function (e) {
                    var t = e.value
                    return void 0 === t ? '' : t
                },
                width: 150,
                minWidth: 0,
                maxWidth: Number.MAX_SAFE_INTEGER,
            }
        function R() {
            for (var e = arguments.length, t = new Array(e), r = 0; r < e; r++) t[r] = arguments[r]
            return t.reduce(function (e, t) {
                var r = t.style,
                    n = t.className,
                    o = b(t, f)
                return (
                    (e = m(m({}, e), o)),
                    r && (e.style = e.style ? m(m({}, e.style || {}), r || {}) : r),
                    n && (e.className = e.className ? e.className + ' ' + n : n),
                    '' === e.className && delete e.className,
                    e
                )
            }, {})
        }
        function j(e, t, r) {
            return 'function' == typeof t
                ? j({}, t(e, r))
                : Array.isArray(t)
                ? R.apply(void 0, [e].concat(p(t)))
                : R(e, t)
        }
        var P = function (e) {
                var t = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : {}
                return function () {
                    var r = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : {}
                    return [].concat(p(e), [r]).reduce(function (e, n) {
                        return j(e, n, m(m({}, t), {}, { userProps: r }))
                    }, {})
                }
            },
            E = function (e, t) {
                var r = arguments.length > 2 && void 0 !== arguments[2] ? arguments[2] : {}
                return e.reduce(function (e, t) {
                    return t(e, r)
                }, t)
            },
            C = function (e, t) {
                var r = arguments.length > 2 && void 0 !== arguments[2] ? arguments[2] : {}
                return e.forEach(function (e) {
                    e(t, r)
                })
            }
        function A(e, t, r, n) {
            e.findIndex(function (e) {
                return e.pluginName === r
            }),
                t.forEach(function (t) {
                    e.findIndex(function (e) {
                        return e.pluginName === t
                    })
                })
        }
        function x(e, t) {
            return 'function' == typeof e ? e(t) : e
        }
        function k(e) {
            var t = i().useRef()
            return (
                (t.current = e),
                i().useCallback(function () {
                    return t.current
                }, [])
            )
        }
        var I = 'undefined' != typeof document ? i().useLayoutEffect : i().useEffect
        function N(e, t) {
            var r = i().useRef(!1)
            I(function () {
                r.current && e(), (r.current = !0)
            }, t)
        }
        function B(e, t) {
            var r = arguments.length > 2 && void 0 !== arguments[2] ? arguments[2] : {}
            return function (n) {
                var o = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : {},
                    a = 'string' == typeof n ? t[n] : n
                if (void 0 === a) throw (console.info(t), new Error(v))
                return F(a, m(m(m({}, e), {}, { column: t }, r), o))
            }
        }
        function F(e, t) {
            return (function (e) {
                return (
                    'function' == typeof e && (t = Object.getPrototypeOf(e)).prototype && t.prototype.isReactComponent
                )
                var t
            })((r = e)) ||
                'function' == typeof r ||
                (function (e) {
                    return (
                        'object' === d(e) &&
                        'symbol' === d(e.$$typeof) &&
                        ['react.memo', 'react.forward_ref'].includes(e.$$typeof.description)
                    )
                })(r)
                ? i().createElement(e, t)
                : e
            var r
        }
        function D(e, t) {
            var r = Object.keys(e)
            if (Object.getOwnPropertySymbols) {
                var n = Object.getOwnPropertySymbols(e)
                t &&
                    (n = n.filter(function (t) {
                        return Object.getOwnPropertyDescriptor(e, t).enumerable
                    })),
                    r.push.apply(r, n)
            }
            return r
        }
        function G(e) {
            for (var t = 1; t < arguments.length; t++) {
                var r = null != arguments[t] ? arguments[t] : {}
                t % 2
                    ? D(Object(r), !0).forEach(function (t) {
                          z(e, t, r[t])
                      })
                    : Object.getOwnPropertyDescriptors
                    ? Object.defineProperties(e, Object.getOwnPropertyDescriptors(r))
                    : D(Object(r)).forEach(function (t) {
                          Object.defineProperty(e, t, Object.getOwnPropertyDescriptor(r, t))
                      })
            }
            return e
        }
        function z(e, t, r) {
            return (
                t in e
                    ? Object.defineProperty(e, t, { value: r, enumerable: !0, configurable: !0, writable: !0 })
                    : (e[t] = r),
                e
            )
        }
        function M(e, t) {
            var r = arguments.length > 2 && void 0 !== arguments[2] ? arguments[2] : 0
            return e.map(function (e) {
                return (
                    W((e = G(G({}, e), {}, { parent: t, depth: r }))),
                    e.columns && (e.columns = M(e.columns, e, r + 1)),
                    e
                )
            })
        }
        function T(e) {
            return (
                (t = 'columns'),
                (r = []),
                (function e(n) {
                    n.forEach(function (n) {
                        n[t] ? e(n[t]) : r.push(n)
                    })
                })(e),
                r
            )
            var t, r
        }
        function W(e) {
            var t = e.id,
                r = e.accessor,
                n = e.Header
            if ('string' == typeof r) {
                t = t || r
                var o = r.split('.')
                r = function (e) {
                    return (function (e, t, r) {
                        if (!t) return e
                        var n,
                            o = 'function' == typeof t ? t : JSON.stringify(t),
                            a =
                                L.get(o) ||
                                (function () {
                                    var e = (function (e) {
                                        return Y(e)
                                            .map(function (e) {
                                                return String(e).replace('.', '_')
                                            })
                                            .join('.')
                                            .replace(q, '.')
                                            .replace(Z, '')
                                            .split('.')
                                    })(t)
                                    return L.set(o, e), e
                                })()
                        try {
                            n = a.reduce(function (e, t) {
                                return e[t]
                            }, e)
                        } catch (e) {}
                        return void 0 !== n ? n : void 0
                    })(e, o)
                }
            }
            if ((!t && 'string' == typeof n && n && (t = n), !t && e.columns))
                throw (console.error(e), new Error('A column ID (or unique "Header" value) is required!'))
            if (!t) throw (console.error(e), new Error('A column ID (or string accessor) is required!'))
            return Object.assign(e, { id: t, accessor: r }), e
        }
        function H(e, t) {
            if (!t) throw new Error()
            return (
                Object.assign(e, G(G(G({ Header: S, Footer: S }, O), t), e)),
                Object.assign(e, { originalWidth: e.width }),
                e
            )
        }
        function _(e, t) {
            for (
                var r =
                        arguments.length > 2 && void 0 !== arguments[2]
                            ? arguments[2]
                            : function () {
                                  return {}
                              },
                    n = [],
                    o = e,
                    a = 0,
                    i = function () {
                        return a++
                    },
                    l = function () {
                        var e = { headers: [] },
                            a = [],
                            l = o.some(function (e) {
                                return e.parent
                            })
                        o.forEach(function (n) {
                            var o,
                                u = [].concat(a).reverse()[0]
                            l &&
                                ((o = n.parent
                                    ? G(
                                          G({}, n.parent),
                                          {},
                                          {
                                              originalId: n.parent.id,
                                              id: ''.concat(n.parent.id, '_').concat(i()),
                                              headers: [n],
                                          },
                                          r(n),
                                      )
                                    : H(
                                          G(
                                              {
                                                  originalId: ''.concat(n.id, '_placeholder'),
                                                  id: ''.concat(n.id, '_placeholder_').concat(i()),
                                                  placeholderOf: n,
                                                  headers: [n],
                                              },
                                              r(n),
                                          ),
                                          t,
                                      )),
                                u && u.originalId === o.originalId ? u.headers.push(n) : a.push(o)),
                                e.headers.push(n)
                        }),
                            n.push(e),
                            (o = a)
                    };
                o.length;

            )
                l()
            return n.reverse()
        }
        var L = new Map()
        function V() {
            for (var e = arguments.length, t = new Array(e), r = 0; r < e; r++) t[r] = arguments[r]
            for (var n = 0; n < t.length; n += 1) if (void 0 !== t[n]) return t[n]
        }
        function $(e) {
            if ('function' == typeof e) return e
        }
        function U(e, t) {
            var r = t.manualExpandedKey,
                n = t.expanded,
                o = t.expandSubRows,
                a = void 0 === o || o,
                i = [],
                l = function e(t) {
                    var o = !(arguments.length > 1 && void 0 !== arguments[1]) || arguments[1]
                    ;(t.isExpanded = (t.original && t.original[r]) || n[t.id]),
                        (t.canExpand = t.subRows && !!t.subRows.length),
                        o && i.push(t),
                        t.subRows &&
                            t.subRows.length &&
                            t.isExpanded &&
                            t.subRows.forEach(function (t) {
                                return e(t, a)
                            })
                }
            return (
                e.forEach(function (e) {
                    return l(e)
                }),
                i
            )
        }
        function K(e, t, r) {
            return $(e) || t[e] || r[e] || r.text
        }
        function X(e, t, r) {
            return e ? e(t, r) : void 0 === t
        }
        function J() {
            throw new Error(
                'React-Table: You have not called prepareRow(row) one or more rows you are attempting to render.',
            )
        }
        var q = /\[/g,
            Z = /\]/g
        function Y(e) {
            var t = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : []
            if (Array.isArray(e)) for (var r = 0; r < e.length; r += 1) Y(e[r], t)
            else t.push(e)
            return t
        }
        function Q(e, t) {
            var r = Object.keys(e)
            if (Object.getOwnPropertySymbols) {
                var n = Object.getOwnPropertySymbols(e)
                t &&
                    (n = n.filter(function (t) {
                        return Object.getOwnPropertyDescriptor(e, t).enumerable
                    })),
                    r.push.apply(r, n)
            }
            return r
        }
        function ee(e) {
            for (var t = 1; t < arguments.length; t++) {
                var r = null != arguments[t] ? arguments[t] : {}
                t % 2
                    ? Q(Object(r), !0).forEach(function (t) {
                          te(e, t, r[t])
                      })
                    : Object.getOwnPropertyDescriptors
                    ? Object.defineProperties(e, Object.getOwnPropertyDescriptors(r))
                    : Q(Object(r)).forEach(function (t) {
                          Object.defineProperty(e, t, Object.getOwnPropertyDescriptor(r, t))
                      })
            }
            return e
        }
        function te(e, t, r) {
            return (
                t in e
                    ? Object.defineProperty(e, t, { value: r, enumerable: !0, configurable: !0, writable: !0 })
                    : (e[t] = r),
                e
            )
        }
        var re = function (e) {
                return ee({ role: 'table' }, e)
            },
            ne = function (e) {
                return ee({ role: 'rowgroup' }, e)
            },
            oe = function (e, t) {
                var r = t.column
                return ee({ key: 'header_'.concat(r.id), colSpan: r.totalVisibleHeaderCount, role: 'columnheader' }, e)
            },
            ae = function (e, t) {
                var r = t.column
                return ee({ key: 'footer_'.concat(r.id), colSpan: r.totalVisibleHeaderCount }, e)
            },
            ie = function (e, t) {
                var r = t.index
                return ee({ key: 'headerGroup_'.concat(r), role: 'row' }, e)
            },
            le = function (e, t) {
                var r = t.index
                return ee({ key: 'footerGroup_'.concat(r) }, e)
            },
            ue = function (e, t) {
                var r = t.row
                return ee({ key: 'row_'.concat(r.id), role: 'row' }, e)
            },
            ce = function (e, t) {
                var r = t.cell
                return ee({ key: 'cell_'.concat(r.row.id, '_').concat(r.column.id), role: 'cell' }, e)
            }
        function se() {
            return {
                useOptions: [],
                stateReducers: [],
                useControlledState: [],
                columns: [],
                columnsDeps: [],
                allColumns: [],
                allColumnsDeps: [],
                accessValue: [],
                materializedColumns: [],
                materializedColumnsDeps: [],
                useInstanceAfterData: [],
                visibleColumns: [],
                visibleColumnsDeps: [],
                headerGroups: [],
                headerGroupsDeps: [],
                useInstanceBeforeDimensions: [],
                useInstance: [],
                prepareRow: [],
                getTableProps: [re],
                getTableBodyProps: [ne],
                getHeaderGroupProps: [ie],
                getFooterGroupProps: [le],
                getHeaderProps: [oe],
                getFooterProps: [ae],
                getRowProps: [ue],
                getCellProps: [ce],
                useFinalInstance: [],
            }
        }
        function fe(e, t) {
            var r = Object.keys(e)
            if (Object.getOwnPropertySymbols) {
                var n = Object.getOwnPropertySymbols(e)
                t &&
                    (n = n.filter(function (t) {
                        return Object.getOwnPropertyDescriptor(e, t).enumerable
                    })),
                    r.push.apply(r, n)
            }
            return r
        }
        function de(e) {
            for (var t = 1; t < arguments.length; t++) {
                var r = null != arguments[t] ? arguments[t] : {}
                t % 2
                    ? fe(Object(r), !0).forEach(function (t) {
                          pe(e, t, r[t])
                      })
                    : Object.getOwnPropertyDescriptors
                    ? Object.defineProperties(e, Object.getOwnPropertyDescriptors(r))
                    : fe(Object(r)).forEach(function (t) {
                          Object.defineProperty(e, t, Object.getOwnPropertyDescriptor(r, t))
                      })
            }
            return e
        }
        function pe(e, t, r) {
            return (
                t in e
                    ? Object.defineProperty(e, t, { value: r, enumerable: !0, configurable: !0, writable: !0 })
                    : (e[t] = r),
                e
            )
        }
        function ge(e) {
            return (
                (function (e) {
                    if (Array.isArray(e)) return ye(e)
                })(e) ||
                (function (e) {
                    if (('undefined' != typeof Symbol && null != e[Symbol.iterator]) || null != e['@@iterator'])
                        return Array.from(e)
                })(e) ||
                (function (e, t) {
                    if (e) {
                        if ('string' == typeof e) return ye(e, t)
                        var r = Object.prototype.toString.call(e).slice(8, -1)
                        return (
                            'Object' === r && e.constructor && (r = e.constructor.name),
                            'Map' === r || 'Set' === r
                                ? Array.from(e)
                                : 'Arguments' === r || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(r)
                                ? ye(e, t)
                                : void 0
                        )
                    }
                })(e) ||
                (function () {
                    throw new TypeError(
                        'Invalid attempt to spread non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.',
                    )
                })()
            )
        }
        function ye(e, t) {
            ;(null == t || t > e.length) && (t = e.length)
            for (var r = 0, n = new Array(t); r < t; r++) n[r] = e[r]
            return n
        }
        ;(w.resetHiddenColumns = 'resetHiddenColumns'),
            (w.toggleHideColumn = 'toggleHideColumn'),
            (w.setHiddenColumns = 'setHiddenColumns'),
            (w.toggleHideAllColumns = 'toggleHideAllColumns')
        var me = function (e) {
            ;(e.getToggleHiddenProps = [he]),
                (e.getToggleHideAllColumnsProps = [be]),
                e.stateReducers.push(ve),
                e.useInstanceBeforeDimensions.push(we),
                e.headerGroupsDeps.push(function (e, t) {
                    var r = t.instance
                    return [].concat(ge(e), [r.state.hiddenColumns])
                }),
                e.useInstance.push(Se)
        }
        me.pluginName = 'useColumnVisibility'
        var he = function (e, t) {
                var r = t.column
                return [
                    e,
                    {
                        onChange: function (e) {
                            r.toggleHidden(!e.target.checked)
                        },
                        style: { cursor: 'pointer' },
                        checked: r.isVisible,
                        title: 'Toggle Column Visible',
                    },
                ]
            },
            be = function (e, t) {
                var r = t.instance
                return [
                    e,
                    {
                        onChange: function (e) {
                            r.toggleHideAllColumns(!e.target.checked)
                        },
                        style: { cursor: 'pointer' },
                        checked: !r.allColumnsHidden && !r.state.hiddenColumns.length,
                        title: 'Toggle All Columns Hidden',
                        indeterminate: !r.allColumnsHidden && r.state.hiddenColumns.length,
                    },
                ]
            }
        function ve(e, t, r, n) {
            if (t.type === w.init) return de({ hiddenColumns: [] }, e)
            if (t.type === w.resetHiddenColumns)
                return de(de({}, e), {}, { hiddenColumns: n.initialState.hiddenColumns || [] })
            if (t.type === w.toggleHideColumn) {
                var o = (void 0 !== t.value ? t.value : !e.hiddenColumns.includes(t.columnId))
                    ? [].concat(ge(e.hiddenColumns), [t.columnId])
                    : e.hiddenColumns.filter(function (e) {
                          return e !== t.columnId
                      })
                return de(de({}, e), {}, { hiddenColumns: o })
            }
            if (t.type === w.setHiddenColumns) return de(de({}, e), {}, { hiddenColumns: x(t.value, e.hiddenColumns) })
            if (t.type === w.toggleHideAllColumns) {
                var a = void 0 !== t.value ? t.value : !e.hiddenColumns.length
                return de(
                    de({}, e),
                    {},
                    {
                        hiddenColumns: a
                            ? n.allColumns.map(function (e) {
                                  return e.id
                              })
                            : [],
                    },
                )
            }
        }
        function we(e) {
            var t = e.headers,
                r = e.state.hiddenColumns
            i().useRef(!1).current
            var n = function e(t, n) {
                    t.isVisible = n && !r.includes(t.id)
                    var o = 0
                    return (
                        t.headers && t.headers.length
                            ? t.headers.forEach(function (r) {
                                  return (o += e(r, t.isVisible))
                              })
                            : (o = t.isVisible ? 1 : 0),
                        (t.totalVisibleHeaderCount = o),
                        o
                    )
                },
                o = 0
            t.forEach(function (e) {
                return (o += n(e, !0))
            })
        }
        function Se(e) {
            var t = e.columns,
                r = e.flatHeaders,
                n = e.dispatch,
                o = e.allColumns,
                a = e.getHooks,
                l = e.state.hiddenColumns,
                u = e.autoResetHiddenColumns,
                c = void 0 === u || u,
                s = k(e),
                f = o.length === l.length,
                d = i().useCallback(
                    function (e, t) {
                        return n({ type: w.toggleHideColumn, columnId: e, value: t })
                    },
                    [n],
                ),
                p = i().useCallback(
                    function (e) {
                        return n({ type: w.setHiddenColumns, value: e })
                    },
                    [n],
                ),
                g = i().useCallback(
                    function (e) {
                        return n({ type: w.toggleHideAllColumns, value: e })
                    },
                    [n],
                ),
                y = P(a().getToggleHideAllColumnsProps, { instance: s() })
            r.forEach(function (e) {
                ;(e.toggleHidden = function (t) {
                    n({ type: w.toggleHideColumn, columnId: e.id, value: t })
                }),
                    (e.getToggleHiddenProps = P(a().getToggleHiddenProps, { instance: s(), column: e }))
            })
            var m = k(c)
            N(
                function () {
                    m() && n({ type: w.resetHiddenColumns })
                },
                [n, t],
            ),
                Object.assign(e, {
                    allColumnsHidden: f,
                    toggleHideColumn: d,
                    setHiddenColumns: p,
                    toggleHideAllColumns: g,
                    getToggleHideAllColumnsProps: y,
                })
        }
        var Oe = ['initialState', 'defaultColumn', 'getSubRows', 'getRowId', 'stateReducer', 'useControlledState']
        function Re(e, t) {
            return (
                (function (e) {
                    if (Array.isArray(e)) return e
                })(e) ||
                (function (e, t) {
                    var r = null == e ? null : ('undefined' != typeof Symbol && e[Symbol.iterator]) || e['@@iterator']
                    if (null != r) {
                        var n,
                            o,
                            a = [],
                            i = !0,
                            l = !1
                        try {
                            for (
                                r = r.call(e);
                                !(i = (n = r.next()).done) && (a.push(n.value), !t || a.length !== t);
                                i = !0
                            );
                        } catch (e) {
                            ;(l = !0), (o = e)
                        } finally {
                            try {
                                i || null == r.return || r.return()
                            } finally {
                                if (l) throw o
                            }
                        }
                        return a
                    }
                })(e, t) ||
                Pe(e, t) ||
                (function () {
                    throw new TypeError(
                        'Invalid attempt to destructure non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.',
                    )
                })()
            )
        }
        function je(e) {
            return (
                (function (e) {
                    if (Array.isArray(e)) return Ee(e)
                })(e) ||
                (function (e) {
                    if (('undefined' != typeof Symbol && null != e[Symbol.iterator]) || null != e['@@iterator'])
                        return Array.from(e)
                })(e) ||
                Pe(e) ||
                (function () {
                    throw new TypeError(
                        'Invalid attempt to spread non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.',
                    )
                })()
            )
        }
        function Pe(e, t) {
            if (e) {
                if ('string' == typeof e) return Ee(e, t)
                var r = Object.prototype.toString.call(e).slice(8, -1)
                return (
                    'Object' === r && e.constructor && (r = e.constructor.name),
                    'Map' === r || 'Set' === r
                        ? Array.from(e)
                        : 'Arguments' === r || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(r)
                        ? Ee(e, t)
                        : void 0
                )
            }
        }
        function Ee(e, t) {
            ;(null == t || t > e.length) && (t = e.length)
            for (var r = 0, n = new Array(t); r < t; r++) n[r] = e[r]
            return n
        }
        function Ce(e, t) {
            var r = Object.keys(e)
            if (Object.getOwnPropertySymbols) {
                var n = Object.getOwnPropertySymbols(e)
                t &&
                    (n = n.filter(function (t) {
                        return Object.getOwnPropertyDescriptor(e, t).enumerable
                    })),
                    r.push.apply(r, n)
            }
            return r
        }
        function Ae(e) {
            for (var t = 1; t < arguments.length; t++) {
                var r = null != arguments[t] ? arguments[t] : {}
                t % 2
                    ? Ce(Object(r), !0).forEach(function (t) {
                          xe(e, t, r[t])
                      })
                    : Object.getOwnPropertyDescriptors
                    ? Object.defineProperties(e, Object.getOwnPropertyDescriptors(r))
                    : Ce(Object(r)).forEach(function (t) {
                          Object.defineProperty(e, t, Object.getOwnPropertyDescriptor(r, t))
                      })
            }
            return e
        }
        function xe(e, t, r) {
            return (
                t in e
                    ? Object.defineProperty(e, t, { value: r, enumerable: !0, configurable: !0, writable: !0 })
                    : (e[t] = r),
                e
            )
        }
        var ke = {},
            Ie = {},
            Ne = function (e, t, r) {
                return e
            },
            Be = function (e, t) {
                return e.subRows || []
            },
            Fe = function (e, t, r) {
                return ''.concat(r ? [r.id, t].join('.') : t)
            },
            De = function (e) {
                return e
            }
        function Ge(e) {
            var t = e.initialState,
                r = void 0 === t ? ke : t,
                n = e.defaultColumn,
                o = void 0 === n ? Ie : n,
                a = e.getSubRows,
                i = void 0 === a ? Be : a,
                l = e.getRowId,
                u = void 0 === l ? Fe : l,
                c = e.stateReducer,
                s = void 0 === c ? Ne : c,
                f = e.useControlledState,
                d = void 0 === f ? De : f
            return Ae(
                Ae(
                    {},
                    (function (e, t) {
                        if (null == e) return {}
                        var r,
                            n,
                            o = (function (e, t) {
                                if (null == e) return {}
                                var r,
                                    n,
                                    o = {},
                                    a = Object.keys(e)
                                for (n = 0; n < a.length; n++) (r = a[n]), t.indexOf(r) >= 0 || (o[r] = e[r])
                                return o
                            })(e, t)
                        if (Object.getOwnPropertySymbols) {
                            var a = Object.getOwnPropertySymbols(e)
                            for (n = 0; n < a.length; n++)
                                (r = a[n]),
                                    t.indexOf(r) >= 0 ||
                                        (Object.prototype.propertyIsEnumerable.call(e, r) && (o[r] = e[r]))
                        }
                        return o
                    })(e, Oe),
                ),
                {},
                {
                    initialState: r,
                    defaultColumn: o,
                    getSubRows: i,
                    getRowId: u,
                    stateReducer: s,
                    useControlledState: d,
                },
            )
        }
        function ze(e) {
            var t = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : 0,
                r = 0,
                n = 0,
                o = 0,
                a = 0
            return (
                e.forEach(function (e) {
                    var i = e.headers
                    if (((e.totalLeft = t), i && i.length)) {
                        var l = Re(ze(i, t), 4),
                            u = l[0],
                            c = l[1],
                            s = l[2],
                            f = l[3]
                        ;(e.totalMinWidth = u), (e.totalWidth = c), (e.totalMaxWidth = s), (e.totalFlexWidth = f)
                    } else (e.totalMinWidth = e.minWidth), (e.totalWidth = Math.min(Math.max(e.minWidth, e.width), e.maxWidth)), (e.totalMaxWidth = e.maxWidth), (e.totalFlexWidth = e.canResize ? e.totalWidth : 0)
                    e.isVisible &&
                        ((t += e.totalWidth),
                        (r += e.totalMinWidth),
                        (n += e.totalWidth),
                        (o += e.totalMaxWidth),
                        (a += e.totalFlexWidth))
                }),
                [r, n, o, a]
            )
        }
        function Me(e) {
            var t = e.data,
                r = e.rows,
                n = e.flatRows,
                o = e.rowsById,
                a = e.column,
                i = e.getRowId,
                l = e.getSubRows,
                u = e.accessValueHooks,
                c = e.getInstance,
                s = function e(r, s) {
                    var f = arguments.length > 2 && void 0 !== arguments[2] ? arguments[2] : 0,
                        d = arguments.length > 3 ? arguments[3] : void 0,
                        p = arguments.length > 4 ? arguments[4] : void 0,
                        g = r,
                        y = i(r, s, d),
                        m = o[y]
                    if (m)
                        m.subRows &&
                            m.originalSubRows.forEach(function (t, r) {
                                return e(t, r, f + 1, m)
                            })
                    else if (
                        (((m = { id: y, original: g, index: s, depth: f, cells: [{}] }).cells.map = J),
                        (m.cells.filter = J),
                        (m.cells.forEach = J),
                        (m.cells[0].getCellProps = J),
                        (m.values = {}),
                        p.push(m),
                        n.push(m),
                        (o[y] = m),
                        (m.originalSubRows = l(r, s)),
                        m.originalSubRows)
                    ) {
                        var h = []
                        m.originalSubRows.forEach(function (t, r) {
                            return e(t, r, f + 1, m, h)
                        }),
                            (m.subRows = h)
                    }
                    a.accessor && (m.values[a.id] = a.accessor(r, s, m, p, t)),
                        (m.values[a.id] = E(u, m.values[a.id], { row: m, column: a, instance: c() }, !0))
                }
            t.forEach(function (e, t) {
                return s(e, t, 0, void 0, r)
            })
        }
        function Te(e) {
            return (
                (Te =
                    'function' == typeof Symbol && 'symbol' == typeof Symbol.iterator
                        ? function (e) {
                              return typeof e
                          }
                        : function (e) {
                              return e &&
                                  'function' == typeof Symbol &&
                                  e.constructor === Symbol &&
                                  e !== Symbol.prototype
                                  ? 'symbol'
                                  : typeof e
                          }),
                Te(e)
            )
        }
        function We(e) {
            var t = (function (e, t) {
                if ('object' !== Te(e) || null === e) return e
                var r = e[Symbol.toPrimitive]
                if (void 0 !== r) {
                    var n = r.call(e, t)
                    if ('object' !== Te(n)) return n
                    throw new TypeError('@@toPrimitive must return a primitive value.')
                }
                return String(e)
            })(e, 'string')
            return 'symbol' === Te(t) ? t : String(t)
        }
        function He(e, t) {
            var r = Object.keys(e)
            if (Object.getOwnPropertySymbols) {
                var n = Object.getOwnPropertySymbols(e)
                t &&
                    (n = n.filter(function (t) {
                        return Object.getOwnPropertyDescriptor(e, t).enumerable
                    })),
                    r.push.apply(r, n)
            }
            return r
        }
        function _e(e) {
            for (var t = 1; t < arguments.length; t++) {
                var r = null != arguments[t] ? arguments[t] : {}
                t % 2
                    ? He(Object(r), !0).forEach(function (t) {
                          Le(e, t, r[t])
                      })
                    : Object.getOwnPropertyDescriptors
                    ? Object.defineProperties(e, Object.getOwnPropertyDescriptors(r))
                    : He(Object(r)).forEach(function (t) {
                          Object.defineProperty(e, t, Object.getOwnPropertyDescriptor(r, t))
                      })
            }
            return e
        }
        function Le(e, t, r) {
            return (
                t in e
                    ? Object.defineProperty(e, t, { value: r, enumerable: !0, configurable: !0, writable: !0 })
                    : (e[t] = r),
                e
            )
        }
        ;(w.resetExpanded = 'resetExpanded'),
            (w.toggleRowExpanded = 'toggleRowExpanded'),
            (w.toggleAllRowsExpanded = 'toggleAllRowsExpanded')
        var Ve = function (e) {
            ;(e.getToggleAllRowsExpandedProps = [$e]),
                (e.getToggleRowExpandedProps = [Ue]),
                e.stateReducers.push(Ke),
                e.useInstance.push(Xe),
                e.prepareRow.push(Je)
        }
        Ve.pluginName = 'useExpanded'
        var $e = function (e, t) {
                var r = t.instance
                return [
                    e,
                    {
                        onClick: function (e) {
                            r.toggleAllRowsExpanded()
                        },
                        style: { cursor: 'pointer' },
                        title: 'Toggle All Rows Expanded',
                    },
                ]
            },
            Ue = function (e, t) {
                var r = t.row
                return [
                    e,
                    {
                        onClick: function () {
                            r.toggleRowExpanded()
                        },
                        style: { cursor: 'pointer' },
                        title: 'Toggle Row Expanded',
                    },
                ]
            }
        function Ke(e, t, r, n) {
            if (t.type === w.init) return _e({ expanded: {} }, e)
            if (t.type === w.resetExpanded) return _e(_e({}, e), {}, { expanded: n.initialState.expanded || {} })
            if (t.type === w.toggleAllRowsExpanded) {
                var o = t.value,
                    a = n.rowsById,
                    i = Object.keys(a).length === Object.keys(e.expanded).length
                if (void 0 !== o ? o : !i) {
                    var l = {}
                    return (
                        Object.keys(a).forEach(function (e) {
                            l[e] = !0
                        }),
                        _e(_e({}, e), {}, { expanded: l })
                    )
                }
                return _e(_e({}, e), {}, { expanded: {} })
            }
            if (t.type === w.toggleRowExpanded) {
                var u = t.id,
                    c = t.value,
                    s = e.expanded[u],
                    f = void 0 !== c ? c : !s
                if (!s && f) return _e(_e({}, e), {}, { expanded: _e(_e({}, e.expanded), {}, Le({}, u, !0)) })
                if (s && !f) {
                    var d = e.expanded,
                        p =
                            (d[u],
                            (function (e, t) {
                                if (null == e) return {}
                                var r,
                                    n,
                                    o = (function (e, t) {
                                        if (null == e) return {}
                                        var r,
                                            n,
                                            o = {},
                                            a = Object.keys(e)
                                        for (n = 0; n < a.length; n++) (r = a[n]), t.indexOf(r) >= 0 || (o[r] = e[r])
                                        return o
                                    })(e, t)
                                if (Object.getOwnPropertySymbols) {
                                    var a = Object.getOwnPropertySymbols(e)
                                    for (n = 0; n < a.length; n++)
                                        (r = a[n]),
                                            t.indexOf(r) >= 0 ||
                                                (Object.prototype.propertyIsEnumerable.call(e, r) && (o[r] = e[r]))
                                }
                                return o
                            })(d, [u].map(We)))
                    return _e(_e({}, e), {}, { expanded: p })
                }
                return e
            }
        }
        function Xe(e) {
            var t = e.data,
                r = e.rows,
                n = e.rowsById,
                o = e.manualExpandedKey,
                a = void 0 === o ? 'expanded' : o,
                l = e.paginateExpandedRows,
                u = void 0 === l || l,
                c = e.expandSubRows,
                s = void 0 === c || c,
                f = e.autoResetExpanded,
                d = void 0 === f || f,
                p = e.getHooks,
                g = e.plugins,
                y = e.state.expanded,
                m = e.dispatch
            A(g, ['useSortBy', 'useGroupBy', 'usePivotColumns', 'useGlobalFilter'], 'useExpanded')
            var h = k(d),
                b = Boolean(Object.keys(n).length && Object.keys(y).length)
            b &&
                Object.keys(n).some(function (e) {
                    return !y[e]
                }) &&
                (b = !1),
                N(
                    function () {
                        h() && m({ type: w.resetExpanded })
                    },
                    [m, t],
                )
            var v = i().useCallback(
                    function (e, t) {
                        m({ type: w.toggleRowExpanded, id: e, value: t })
                    },
                    [m],
                ),
                S = i().useCallback(
                    function (e) {
                        return m({ type: w.toggleAllRowsExpanded, value: e })
                    },
                    [m],
                ),
                O = i().useMemo(
                    function () {
                        return u ? U(r, { manualExpandedKey: a, expanded: y, expandSubRows: s }) : r
                    },
                    [u, r, a, y, s],
                ),
                R = i().useMemo(
                    function () {
                        return (function (e) {
                            var t = 0
                            return (
                                Object.keys(e).forEach(function (e) {
                                    var r = e.split('.')
                                    t = Math.max(t, r.length)
                                }),
                                t
                            )
                        })(y)
                    },
                    [y],
                ),
                j = k(e),
                E = P(p().getToggleAllRowsExpandedProps, { instance: j() })
            Object.assign(e, {
                preExpandedRows: r,
                expandedRows: O,
                rows: O,
                expandedDepth: R,
                isAllRowsExpanded: b,
                toggleRowExpanded: v,
                toggleAllRowsExpanded: S,
                getToggleAllRowsExpandedProps: E,
            })
        }
        function Je(e, t) {
            var r = t.instance.getHooks,
                n = t.instance
            ;(e.toggleRowExpanded = function (t) {
                return n.toggleRowExpanded(e.id, t)
            }),
                (e.getToggleRowExpandedProps = P(r().getToggleRowExpandedProps, { instance: n, row: e }))
        }
        function qe(e, t) {
            ;(null == t || t > e.length) && (t = e.length)
            for (var r = 0, n = new Array(t); r < t; r++) n[r] = e[r]
            return n
        }
        var Ze = function (e, t, r) {
            return e.filter(function (e) {
                return t.some(function (t) {
                    var n = e.values[t]
                    return String(n).toLowerCase().includes(String(r).toLowerCase())
                })
            })
        }
        Ze.autoRemove = function (e) {
            return !e
        }
        var Ye = function (e, t, r) {
            return e.filter(function (e) {
                return t.some(function (t) {
                    var n = e.values[t]
                    return void 0 === n || String(n).toLowerCase() === String(r).toLowerCase()
                })
            })
        }
        Ye.autoRemove = function (e) {
            return !e
        }
        var Qe = function (e, t, r) {
            return e.filter(function (e) {
                return t.some(function (t) {
                    var n = e.values[t]
                    return void 0 === n || String(n) === String(r)
                })
            })
        }
        Qe.autoRemove = function (e) {
            return !e
        }
        var et = function (e, t, r) {
            return e.filter(function (e) {
                return t.some(function (t) {
                    return e.values[t].includes(r)
                })
            })
        }
        et.autoRemove = function (e) {
            return !e || !e.length
        }
        var tt = function (e, t, r) {
            return e.filter(function (e) {
                return t.some(function (t) {
                    var n = e.values[t]
                    return (
                        n &&
                        n.length &&
                        r.every(function (e) {
                            return n.includes(e)
                        })
                    )
                })
            })
        }
        tt.autoRemove = function (e) {
            return !e || !e.length
        }
        var rt = function (e, t, r) {
            return e.filter(function (e) {
                return t.some(function (t) {
                    var n = e.values[t]
                    return (
                        n &&
                        n.length &&
                        r.some(function (e) {
                            return n.includes(e)
                        })
                    )
                })
            })
        }
        rt.autoRemove = function (e) {
            return !e || !e.length
        }
        var nt = function (e, t, r) {
            return e.filter(function (e) {
                return t.some(function (t) {
                    var n = e.values[t]
                    return r.includes(n)
                })
            })
        }
        nt.autoRemove = function (e) {
            return !e || !e.length
        }
        var ot = function (e, t, r) {
            return e.filter(function (e) {
                return t.some(function (t) {
                    return e.values[t] === r
                })
            })
        }
        ot.autoRemove = function (e) {
            return void 0 === e
        }
        var at = function (e, t, r) {
            return e.filter(function (e) {
                return t.some(function (t) {
                    return e.values[t] == r
                })
            })
        }
        at.autoRemove = function (e) {
            return null == e
        }
        var it = function (e, t, r) {
            var n = (function (e, t) {
                    return (
                        (function (e) {
                            if (Array.isArray(e)) return e
                        })(e) ||
                        (function (e, t) {
                            var r =
                                null == e
                                    ? null
                                    : ('undefined' != typeof Symbol && e[Symbol.iterator]) || e['@@iterator']
                            if (null != r) {
                                var n,
                                    o,
                                    a = [],
                                    i = !0,
                                    l = !1
                                try {
                                    for (
                                        r = r.call(e);
                                        !(i = (n = r.next()).done) && (a.push(n.value), !t || a.length !== t);
                                        i = !0
                                    );
                                } catch (e) {
                                    ;(l = !0), (o = e)
                                } finally {
                                    try {
                                        i || null == r.return || r.return()
                                    } finally {
                                        if (l) throw o
                                    }
                                }
                                return a
                            }
                        })(e, t) ||
                        (function (e, t) {
                            if (e) {
                                if ('string' == typeof e) return qe(e, t)
                                var r = Object.prototype.toString.call(e).slice(8, -1)
                                return (
                                    'Object' === r && e.constructor && (r = e.constructor.name),
                                    'Map' === r || 'Set' === r
                                        ? Array.from(e)
                                        : 'Arguments' === r || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(r)
                                        ? qe(e, t)
                                        : void 0
                                )
                            }
                        })(e, t) ||
                        (function () {
                            throw new TypeError(
                                'Invalid attempt to destructure non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.',
                            )
                        })()
                    )
                })(r || [], 2),
                o = n[0],
                a = n[1]
            if ((o = 'number' == typeof o ? o : -1 / 0) > (a = 'number' == typeof a ? a : 1 / 0)) {
                var i = o
                ;(o = a), (a = i)
            }
            return e.filter(function (e) {
                return t.some(function (t) {
                    var r = e.values[t]
                    return r >= o && r <= a
                })
            })
        }
        function lt(e, t) {
            if (e) {
                if ('string' == typeof e) return ut(e, t)
                var r = Object.prototype.toString.call(e).slice(8, -1)
                return (
                    'Object' === r && e.constructor && (r = e.constructor.name),
                    'Map' === r || 'Set' === r
                        ? Array.from(e)
                        : 'Arguments' === r || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(r)
                        ? ut(e, t)
                        : void 0
                )
            }
        }
        function ut(e, t) {
            ;(null == t || t > e.length) && (t = e.length)
            for (var r = 0, n = new Array(t); r < t; r++) n[r] = e[r]
            return n
        }
        function ct(e, t) {
            var r = Object.keys(e)
            if (Object.getOwnPropertySymbols) {
                var n = Object.getOwnPropertySymbols(e)
                t &&
                    (n = n.filter(function (t) {
                        return Object.getOwnPropertyDescriptor(e, t).enumerable
                    })),
                    r.push.apply(r, n)
            }
            return r
        }
        function st(e) {
            for (var t = 1; t < arguments.length; t++) {
                var r = null != arguments[t] ? arguments[t] : {}
                t % 2
                    ? ct(Object(r), !0).forEach(function (t) {
                          ft(e, t, r[t])
                      })
                    : Object.getOwnPropertyDescriptors
                    ? Object.defineProperties(e, Object.getOwnPropertyDescriptors(r))
                    : ct(Object(r)).forEach(function (t) {
                          Object.defineProperty(e, t, Object.getOwnPropertyDescriptor(r, t))
                      })
            }
            return e
        }
        function ft(e, t, r) {
            return (
                t in e
                    ? Object.defineProperty(e, t, { value: r, enumerable: !0, configurable: !0, writable: !0 })
                    : (e[t] = r),
                e
            )
        }
        ;(it.autoRemove = function (e) {
            return !e || ('number' != typeof e[0] && 'number' != typeof e[1])
        }),
            (w.resetFilters = 'resetFilters'),
            (w.setFilter = 'setFilter'),
            (w.setAllFilters = 'setAllFilters')
        var dt = function (e) {
            e.stateReducers.push(pt), e.useInstance.push(gt)
        }
        function pt(e, t, n, o) {
            if (t.type === w.init) return st({ filters: [] }, e)
            if (t.type === w.resetFilters) return st(st({}, e), {}, { filters: o.initialState.filters || [] })
            if (t.type === w.setFilter) {
                var a = t.columnId,
                    i = t.filterValue,
                    l = o.allColumns,
                    u = o.filterTypes,
                    c = l.find(function (e) {
                        return e.id === a
                    })
                if (!c) throw new Error('React-Table: Could not find a column with id: '.concat(a))
                var s = K(c.filter, u || {}, r),
                    f = e.filters.find(function (e) {
                        return e.id === a
                    }),
                    d = x(i, f && f.value)
                return X(s.autoRemove, d, c)
                    ? st(
                          st({}, e),
                          {},
                          {
                              filters: e.filters.filter(function (e) {
                                  return e.id !== a
                              }),
                          },
                      )
                    : st(
                          st({}, e),
                          {},
                          f
                              ? {
                                    filters: e.filters.map(function (e) {
                                        return e.id === a ? { id: a, value: d } : e
                                    }),
                                }
                              : {
                                    filters: [].concat(
                                        ((p = e.filters),
                                        (function (e) {
                                            if (Array.isArray(e)) return ut(e)
                                        })(p) ||
                                            (function (e) {
                                                if (
                                                    ('undefined' != typeof Symbol && null != e[Symbol.iterator]) ||
                                                    null != e['@@iterator']
                                                )
                                                    return Array.from(e)
                                            })(p) ||
                                            lt(p) ||
                                            (function () {
                                                throw new TypeError(
                                                    'Invalid attempt to spread non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.',
                                                )
                                            })()),
                                        [{ id: a, value: d }],
                                    ),
                                },
                      )
            }
            var p
            if (t.type === w.setAllFilters) {
                var g = t.filters,
                    y = o.allColumns,
                    m = o.filterTypes
                return st(
                    st({}, e),
                    {},
                    {
                        filters: x(g, e.filters).filter(function (e) {
                            var t = y.find(function (t) {
                                return t.id === e.id
                            })
                            return !X(K(t.filter, m || {}, r).autoRemove, e.value, t)
                        }),
                    },
                )
            }
        }
        function gt(e) {
            var t = e.data,
                n = e.rows,
                o = e.flatRows,
                a = e.rowsById,
                l = e.allColumns,
                u = e.filterTypes,
                c = e.manualFilters,
                s = e.defaultCanFilter,
                f = void 0 !== s && s,
                d = e.disableFilters,
                p = e.state.filters,
                g = e.dispatch,
                y = e.autoResetFilters,
                m = void 0 === y || y,
                h = i().useCallback(
                    function (e, t) {
                        g({ type: w.setFilter, columnId: e, filterValue: t })
                    },
                    [g],
                ),
                b = i().useCallback(
                    function (e) {
                        g({ type: w.setAllFilters, filters: e })
                    },
                    [g],
                )
            l.forEach(function (e) {
                var t = e.id,
                    r = e.accessor,
                    n = e.defaultCanFilter,
                    o = e.disableFilters
                ;(e.canFilter = r ? V(!0 !== o && void 0, !0 !== d && void 0, !0) : V(n, f, !1)),
                    (e.setFilter = function (t) {
                        return h(e.id, t)
                    })
                var a = p.find(function (e) {
                    return e.id === t
                })
                e.filterValue = a && a.value
            })
            var v = i().useMemo(
                    function () {
                        if (c || !p.length) return [n, o, a]
                        var e = [],
                            t = {}
                        return [
                            (function n(o) {
                                var a = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : 0,
                                    i = o
                                return (
                                    (i = p.reduce(function (e, t) {
                                        var n = t.id,
                                            o = t.value,
                                            i = l.find(function (e) {
                                                return e.id === n
                                            })
                                        if (!i) return e
                                        0 === a && (i.preFilteredRows = e)
                                        var c = K(i.filter, u || {}, r)
                                        return c
                                            ? ((i.filteredRows = c(e, [n], o)), i.filteredRows)
                                            : (console.warn(
                                                  "Could not find a valid 'column.filter' for column with the ID: ".concat(
                                                      i.id,
                                                      '.',
                                                  ),
                                              ),
                                              e)
                                    }, o)),
                                    i.forEach(function (r) {
                                        e.push(r),
                                            (t[r.id] = r),
                                            r.subRows &&
                                                (r.subRows =
                                                    r.subRows && r.subRows.length > 0 ? n(r.subRows, a + 1) : r.subRows)
                                    }),
                                    i
                                )
                            })(n),
                            e,
                            t,
                        ]
                    },
                    [c, p, n, o, a, l, u],
                ),
                S = (function (e, t) {
                    return (
                        (function (e) {
                            if (Array.isArray(e)) return e
                        })(e) ||
                        (function (e, t) {
                            var r =
                                null == e
                                    ? null
                                    : ('undefined' != typeof Symbol && e[Symbol.iterator]) || e['@@iterator']
                            if (null != r) {
                                var n,
                                    o,
                                    a = [],
                                    i = !0,
                                    l = !1
                                try {
                                    for (
                                        r = r.call(e);
                                        !(i = (n = r.next()).done) && (a.push(n.value), !t || a.length !== t);
                                        i = !0
                                    );
                                } catch (e) {
                                    ;(l = !0), (o = e)
                                } finally {
                                    try {
                                        i || null == r.return || r.return()
                                    } finally {
                                        if (l) throw o
                                    }
                                }
                                return a
                            }
                        })(e, t) ||
                        lt(e, t) ||
                        (function () {
                            throw new TypeError(
                                'Invalid attempt to destructure non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.',
                            )
                        })()
                    )
                })(v, 3),
                O = S[0],
                R = S[1],
                j = S[2]
            i().useMemo(
                function () {
                    var e = l.filter(function (e) {
                        return !p.find(function (t) {
                            return t.id === e.id
                        })
                    })
                    e.forEach(function (e) {
                        ;(e.preFilteredRows = O), (e.filteredRows = O)
                    })
                },
                [O, p, l],
            )
            var P = k(m)
            N(
                function () {
                    P() && g({ type: w.resetFilters })
                },
                [g, c ? null : t],
            ),
                Object.assign(e, {
                    preFilteredRows: n,
                    preFilteredFlatRows: o,
                    preFilteredRowsById: a,
                    filteredRows: O,
                    filteredFlatRows: R,
                    filteredRowsById: j,
                    rows: O,
                    flatRows: R,
                    rowsById: j,
                    setFilter: h,
                    setAllFilters: b,
                })
        }
        dt.pluginName = 'useFilters'
        var yt = ['globalFilter']
        function mt(e, t) {
            ;(null == t || t > e.length) && (t = e.length)
            for (var r = 0, n = new Array(t); r < t; r++) n[r] = e[r]
            return n
        }
        function ht(e, t) {
            var r = Object.keys(e)
            if (Object.getOwnPropertySymbols) {
                var n = Object.getOwnPropertySymbols(e)
                t &&
                    (n = n.filter(function (t) {
                        return Object.getOwnPropertyDescriptor(e, t).enumerable
                    })),
                    r.push.apply(r, n)
            }
            return r
        }
        function bt(e) {
            for (var t = 1; t < arguments.length; t++) {
                var r = null != arguments[t] ? arguments[t] : {}
                t % 2
                    ? ht(Object(r), !0).forEach(function (t) {
                          vt(e, t, r[t])
                      })
                    : Object.getOwnPropertyDescriptors
                    ? Object.defineProperties(e, Object.getOwnPropertyDescriptors(r))
                    : ht(Object(r)).forEach(function (t) {
                          Object.defineProperty(e, t, Object.getOwnPropertyDescriptor(r, t))
                      })
            }
            return e
        }
        function vt(e, t, r) {
            return (
                t in e
                    ? Object.defineProperty(e, t, { value: r, enumerable: !0, configurable: !0, writable: !0 })
                    : (e[t] = r),
                e
            )
        }
        ;(w.resetGlobalFilter = 'resetGlobalFilter'), (w.setGlobalFilter = 'setGlobalFilter')
        var wt = function (e) {
            e.stateReducers.push(St), e.useInstance.push(Ot)
        }
        function St(e, t, n, o) {
            if (t.type === w.resetGlobalFilter)
                return bt(bt({}, e), {}, { globalFilter: o.initialState.globalFilter || void 0 })
            if (t.type === w.setGlobalFilter) {
                var a = t.filterValue,
                    i = o.userFilterTypes,
                    l = K(o.globalFilter, i || {}, r),
                    u = x(a, e.globalFilter)
                return X(l.autoRemove, u)
                    ? (e.globalFilter,
                      (function (e, t) {
                          if (null == e) return {}
                          var r,
                              n,
                              o = (function (e, t) {
                                  if (null == e) return {}
                                  var r,
                                      n,
                                      o = {},
                                      a = Object.keys(e)
                                  for (n = 0; n < a.length; n++) (r = a[n]), t.indexOf(r) >= 0 || (o[r] = e[r])
                                  return o
                              })(e, t)
                          if (Object.getOwnPropertySymbols) {
                              var a = Object.getOwnPropertySymbols(e)
                              for (n = 0; n < a.length; n++)
                                  (r = a[n]),
                                      t.indexOf(r) >= 0 ||
                                          (Object.prototype.propertyIsEnumerable.call(e, r) && (o[r] = e[r]))
                          }
                          return o
                      })(e, yt))
                    : bt(bt({}, e), {}, { globalFilter: u })
            }
        }
        function Ot(e) {
            var t = e.data,
                n = e.rows,
                o = e.flatRows,
                a = e.rowsById,
                l = e.allColumns,
                u = e.filterTypes,
                c = e.globalFilter,
                s = e.manualGlobalFilter,
                f = e.state.globalFilter,
                d = e.dispatch,
                p = e.autoResetGlobalFilter,
                g = void 0 === p || p,
                y = e.disableGlobalFilter,
                m = i().useCallback(
                    function (e) {
                        d({ type: w.setGlobalFilter, filterValue: e })
                    },
                    [d],
                ),
                h = i().useMemo(
                    function () {
                        if (s || void 0 === f) return [n, o, a]
                        var e = [],
                            t = {},
                            i = K(c, u || {}, r)
                        if (!i) return console.warn("Could not find a valid 'globalFilter' option."), n
                        l.forEach(function (e) {
                            var t = e.disableGlobalFilter
                            e.canFilter = V(!0 !== t && void 0, !0 !== y && void 0, !0)
                        })
                        var d = l.filter(function (e) {
                            return !0 === e.canFilter
                        })
                        return [
                            (function r(n) {
                                return (
                                    (n = i(
                                        n,
                                        d.map(function (e) {
                                            return e.id
                                        }),
                                        f,
                                    )).forEach(function (n) {
                                        e.push(n),
                                            (t[n.id] = n),
                                            (n.subRows = n.subRows && n.subRows.length ? r(n.subRows) : n.subRows)
                                    }),
                                    n
                                )
                            })(n),
                            e,
                            t,
                        ]
                    },
                    [s, f, c, u, l, n, o, a, y],
                ),
                b = (function (e, t) {
                    return (
                        (function (e) {
                            if (Array.isArray(e)) return e
                        })(e) ||
                        (function (e, t) {
                            var r =
                                null == e
                                    ? null
                                    : ('undefined' != typeof Symbol && e[Symbol.iterator]) || e['@@iterator']
                            if (null != r) {
                                var n,
                                    o,
                                    a = [],
                                    i = !0,
                                    l = !1
                                try {
                                    for (
                                        r = r.call(e);
                                        !(i = (n = r.next()).done) && (a.push(n.value), !t || a.length !== t);
                                        i = !0
                                    );
                                } catch (e) {
                                    ;(l = !0), (o = e)
                                } finally {
                                    try {
                                        i || null == r.return || r.return()
                                    } finally {
                                        if (l) throw o
                                    }
                                }
                                return a
                            }
                        })(e, t) ||
                        (function (e, t) {
                            if (e) {
                                if ('string' == typeof e) return mt(e, t)
                                var r = Object.prototype.toString.call(e).slice(8, -1)
                                return (
                                    'Object' === r && e.constructor && (r = e.constructor.name),
                                    'Map' === r || 'Set' === r
                                        ? Array.from(e)
                                        : 'Arguments' === r || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(r)
                                        ? mt(e, t)
                                        : void 0
                                )
                            }
                        })(e, t) ||
                        (function () {
                            throw new TypeError(
                                'Invalid attempt to destructure non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.',
                            )
                        })()
                    )
                })(h, 3),
                v = b[0],
                S = b[1],
                O = b[2],
                R = k(g)
            N(
                function () {
                    R() && d({ type: w.resetGlobalFilter })
                },
                [d, s ? null : t],
            ),
                Object.assign(e, {
                    preGlobalFilteredRows: n,
                    preGlobalFilteredFlatRows: o,
                    preGlobalFilteredRowsById: a,
                    globalFilteredRows: v,
                    globalFilteredFlatRows: S,
                    globalFilteredRowsById: O,
                    rows: v,
                    flatRows: S,
                    rowsById: O,
                    setGlobalFilter: m,
                    disableGlobalFilter: y,
                })
        }
        function Rt(e, t) {
            ;(null == t || t > e.length) && (t = e.length)
            for (var r = 0, n = new Array(t); r < t; r++) n[r] = e[r]
            return n
        }
        function jt(e, t) {
            return t.reduce(function (e, t) {
                return e + ('number' == typeof t ? t : 0)
            }, 0)
        }
        function Pt(e) {
            var t = e[0] || 0
            return (
                e.forEach(function (e) {
                    'number' == typeof e && (t = Math.min(t, e))
                }),
                t
            )
        }
        function Et(e) {
            var t = e[0] || 0
            return (
                e.forEach(function (e) {
                    'number' == typeof e && (t = Math.max(t, e))
                }),
                t
            )
        }
        function Ct(e) {
            var t = e[0] || 0,
                r = e[0] || 0
            return (
                e.forEach(function (e) {
                    'number' == typeof e && ((t = Math.min(t, e)), (r = Math.max(r, e)))
                }),
                ''.concat(t, '..').concat(r)
            )
        }
        function At(e) {
            return jt(0, e) / e.length
        }
        function xt(e) {
            if (!e.length) return null
            var t,
                r = Math.floor(e.length / 2),
                n = ((t = e),
                (function (e) {
                    if (Array.isArray(e)) return Rt(e)
                })(t) ||
                    (function (e) {
                        if (('undefined' != typeof Symbol && null != e[Symbol.iterator]) || null != e['@@iterator'])
                            return Array.from(e)
                    })(t) ||
                    (function (e, t) {
                        if (e) {
                            if ('string' == typeof e) return Rt(e, t)
                            var r = Object.prototype.toString.call(e).slice(8, -1)
                            return (
                                'Object' === r && e.constructor && (r = e.constructor.name),
                                'Map' === r || 'Set' === r
                                    ? Array.from(e)
                                    : 'Arguments' === r || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(r)
                                    ? Rt(e, t)
                                    : void 0
                            )
                        }
                    })(t) ||
                    (function () {
                        throw new TypeError(
                            'Invalid attempt to spread non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.',
                        )
                    })()).sort(function (e, t) {
                    return e - t
                })
            return e.length % 2 != 0 ? n[r] : (n[r - 1] + n[r]) / 2
        }
        function kt(e) {
            return Array.from(new Set(e).values())
        }
        function It(e) {
            return new Set(e).size
        }
        function Nt(e) {
            return e.length
        }
        function Bt(e, t) {
            return (
                (function (e) {
                    if (Array.isArray(e)) return e
                })(e) ||
                (function (e, t) {
                    var r = null == e ? null : ('undefined' != typeof Symbol && e[Symbol.iterator]) || e['@@iterator']
                    if (null != r) {
                        var n,
                            o,
                            a = [],
                            i = !0,
                            l = !1
                        try {
                            for (
                                r = r.call(e);
                                !(i = (n = r.next()).done) && (a.push(n.value), !t || a.length !== t);
                                i = !0
                            );
                        } catch (e) {
                            ;(l = !0), (o = e)
                        } finally {
                            try {
                                i || null == r.return || r.return()
                            } finally {
                                if (l) throw o
                            }
                        }
                        return a
                    }
                })(e, t) ||
                (function (e, t) {
                    if (e) {
                        if ('string' == typeof e) return Ft(e, t)
                        var r = Object.prototype.toString.call(e).slice(8, -1)
                        return (
                            'Object' === r && e.constructor && (r = e.constructor.name),
                            'Map' === r || 'Set' === r
                                ? Array.from(e)
                                : 'Arguments' === r || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(r)
                                ? Ft(e, t)
                                : void 0
                        )
                    }
                })(e, t) ||
                (function () {
                    throw new TypeError(
                        'Invalid attempt to destructure non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.',
                    )
                })()
            )
        }
        function Ft(e, t) {
            ;(null == t || t > e.length) && (t = e.length)
            for (var r = 0, n = new Array(t); r < t; r++) n[r] = e[r]
            return n
        }
        ;(wt.pluginName = 'useGlobalFilter'),
            (w.resetGroupBy = 'resetGroupBy'),
            (w.setGroupBy = 'setGroupBy'),
            (w.toggleGroupBy = 'toggleGroupBy')
        var Dt = /([0-9]+)/gm,
            Gt = function (e, t, r) {
                var n = Bt(_t(e, t, r), 2),
                    o = n[0],
                    a = n[1]
                for (
                    o = Lt(o), a = Lt(a), o = o.split(Dt).filter(Boolean), a = a.split(Dt).filter(Boolean);
                    o.length && a.length;

                ) {
                    var i = o.shift(),
                        l = a.shift(),
                        u = parseInt(i, 10),
                        c = parseInt(l, 10),
                        s = [u, c].sort()
                    if (isNaN(s[0])) {
                        if (i > l) return 1
                        if (l > i) return -1
                    } else {
                        if (isNaN(s[1])) return isNaN(u) ? -1 : 1
                        if (u > c) return 1
                        if (c > u) return -1
                    }
                }
                return o.length - a.length
            }
        function zt(e, t, r) {
            var n = Bt(_t(e, t, r), 2),
                o = n[0],
                a = n[1]
            return Ht((o = o.getTime()), (a = a.getTime()))
        }
        function Mt(e, t, r) {
            var n = Bt(_t(e, t, r), 2)
            return Ht(n[0], n[1])
        }
        function Tt(e, t, r) {
            var n = Bt(_t(e, t, r), 2),
                o = n[0],
                a = n[1]
            for (o = o.split('').filter(Boolean), a = a.split('').filter(Boolean); o.length && a.length; ) {
                var i = o.shift(),
                    l = a.shift(),
                    u = i.toLowerCase(),
                    c = l.toLowerCase()
                if (u > c) return 1
                if (c > u) return -1
                if (i > l) return 1
                if (l > i) return -1
            }
            return o.length - a.length
        }
        function Wt(e, t, r) {
            var n = Bt(_t(e, t, r), 2),
                o = n[0],
                a = n[1],
                i = /[^0-9.]/gi
            return Ht((o = Number(String(o).replace(i, ''))), (a = Number(String(a).replace(i, ''))))
        }
        function Ht(e, t) {
            return e === t ? 0 : e > t ? 1 : -1
        }
        function _t(e, t, r) {
            return [e.values[r], t.values[r]]
        }
        function Lt(e) {
            return 'number' == typeof e
                ? isNaN(e) || e === 1 / 0 || e === -1 / 0
                    ? ''
                    : String(e)
                : 'string' == typeof e
                ? e
                : ''
        }
        function Vt(e) {
            return (
                (function (e) {
                    if (Array.isArray(e)) return Ut(e)
                })(e) ||
                (function (e) {
                    if (('undefined' != typeof Symbol && null != e[Symbol.iterator]) || null != e['@@iterator'])
                        return Array.from(e)
                })(e) ||
                $t(e) ||
                (function () {
                    throw new TypeError(
                        'Invalid attempt to spread non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.',
                    )
                })()
            )
        }
        function $t(e, t) {
            if (e) {
                if ('string' == typeof e) return Ut(e, t)
                var r = Object.prototype.toString.call(e).slice(8, -1)
                return (
                    'Object' === r && e.constructor && (r = e.constructor.name),
                    'Map' === r || 'Set' === r
                        ? Array.from(e)
                        : 'Arguments' === r || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(r)
                        ? Ut(e, t)
                        : void 0
                )
            }
        }
        function Ut(e, t) {
            ;(null == t || t > e.length) && (t = e.length)
            for (var r = 0, n = new Array(t); r < t; r++) n[r] = e[r]
            return n
        }
        function Kt(e, t) {
            var r = Object.keys(e)
            if (Object.getOwnPropertySymbols) {
                var n = Object.getOwnPropertySymbols(e)
                t &&
                    (n = n.filter(function (t) {
                        return Object.getOwnPropertyDescriptor(e, t).enumerable
                    })),
                    r.push.apply(r, n)
            }
            return r
        }
        function Xt(e) {
            for (var t = 1; t < arguments.length; t++) {
                var r = null != arguments[t] ? arguments[t] : {}
                t % 2
                    ? Kt(Object(r), !0).forEach(function (t) {
                          Jt(e, t, r[t])
                      })
                    : Object.getOwnPropertyDescriptors
                    ? Object.defineProperties(e, Object.getOwnPropertyDescriptors(r))
                    : Kt(Object(r)).forEach(function (t) {
                          Object.defineProperty(e, t, Object.getOwnPropertyDescriptor(r, t))
                      })
            }
            return e
        }
        function Jt(e, t, r) {
            return (
                t in e
                    ? Object.defineProperty(e, t, { value: r, enumerable: !0, configurable: !0, writable: !0 })
                    : (e[t] = r),
                e
            )
        }
        ;(w.resetSortBy = 'resetSortBy'),
            (w.setSortBy = 'setSortBy'),
            (w.toggleSortBy = 'toggleSortBy'),
            (w.clearSortBy = 'clearSortBy'),
            (O.sortType = 'alphanumeric'),
            (O.sortDescFirst = !1)
        var qt = function (e) {
            ;(e.getSortByToggleProps = [Zt]), e.stateReducers.push(Yt), e.useInstance.push(Qt)
        }
        qt.pluginName = 'useSortBy'
        var Zt = function (e, t) {
            var r = t.instance,
                n = t.column,
                o = r.isMultiSortEvent,
                a =
                    void 0 === o
                        ? function (e) {
                              return e.shiftKey
                          }
                        : o
            return [
                e,
                {
                    onClick: n.canSort
                        ? function (e) {
                              e.persist(), n.toggleSortBy(void 0, !r.disableMultiSort && a(e))
                          }
                        : void 0,
                    style: { cursor: n.canSort ? 'pointer' : void 0 },
                    title: n.canSort ? 'Toggle SortBy' : void 0,
                },
            ]
        }
        function Yt(e, t, r, n) {
            if (t.type === w.init) return Xt({ sortBy: [] }, e)
            if (t.type === w.resetSortBy) return Xt(Xt({}, e), {}, { sortBy: n.initialState.sortBy || [] })
            if (t.type === w.clearSortBy) {
                var o = e.sortBy.filter(function (e) {
                    return e.id !== t.columnId
                })
                return Xt(Xt({}, e), {}, { sortBy: o })
            }
            if (t.type === w.setSortBy) {
                var a = t.sortBy
                return Xt(Xt({}, e), {}, { sortBy: a })
            }
            if (t.type === w.toggleSortBy) {
                var i,
                    l = t.columnId,
                    u = t.desc,
                    c = t.multi,
                    s = n.allColumns,
                    f = n.disableMultiSort,
                    d = n.disableSortRemove,
                    p = n.disableMultiRemove,
                    g = n.maxMultiSortColCount,
                    y = void 0 === g ? Number.MAX_SAFE_INTEGER : g,
                    m = e.sortBy,
                    h = s.find(function (e) {
                        return e.id === l
                    }).sortDescFirst,
                    b = m.find(function (e) {
                        return e.id === l
                    }),
                    v = m.findIndex(function (e) {
                        return e.id === l
                    }),
                    S = null != u,
                    O = []
                return (
                    'toggle' !=
                        (i =
                            !f && c
                                ? b
                                    ? 'toggle'
                                    : 'add'
                                : v !== m.length - 1 || 1 !== m.length
                                ? 'replace'
                                : b
                                ? 'toggle'
                                : 'replace') ||
                        d ||
                        S ||
                        (c && p) ||
                        !((b && b.desc && !h) || (!b.desc && h)) ||
                        (i = 'remove'),
                    'replace' === i
                        ? (O = [{ id: l, desc: S ? u : h }])
                        : 'add' === i
                        ? (O = [].concat(Vt(m), [{ id: l, desc: S ? u : h }])).splice(0, O.length - y)
                        : 'toggle' === i
                        ? (O = m.map(function (e) {
                              return e.id === l ? Xt(Xt({}, e), {}, { desc: S ? u : !b.desc }) : e
                          }))
                        : 'remove' === i &&
                          (O = m.filter(function (e) {
                              return e.id !== l
                          })),
                    Xt(Xt({}, e), {}, { sortBy: O })
                )
            }
        }
        function Qt(e) {
            var t = e.data,
                r = e.rows,
                n = e.flatRows,
                a = e.allColumns,
                l = e.orderByFn,
                u = void 0 === l ? er : l,
                c = e.sortTypes,
                s = e.manualSortBy,
                f = e.defaultCanSort,
                d = e.disableSortBy,
                p = e.flatHeaders,
                g = e.state.sortBy,
                y = e.dispatch,
                m = e.plugins,
                h = e.getHooks,
                b = e.autoResetSortBy,
                v = void 0 === b || b
            A(m, ['useFilters', 'useGlobalFilter', 'useGroupBy', 'usePivotColumns'], 'useSortBy')
            var S = i().useCallback(
                    function (e) {
                        y({ type: w.setSortBy, sortBy: e })
                    },
                    [y],
                ),
                O = i().useCallback(
                    function (e, t, r) {
                        y({ type: w.toggleSortBy, columnId: e, desc: t, multi: r })
                    },
                    [y],
                ),
                R = k(e)
            p.forEach(function (e) {
                var t = e.accessor,
                    r = e.canSort,
                    n = e.disableSortBy,
                    o = e.id,
                    a = t ? V(!0 !== n && void 0, !0 !== d && void 0, !0) : V(f, r, !1)
                ;(e.canSort = a),
                    e.canSort &&
                        ((e.toggleSortBy = function (t, r) {
                            return O(e.id, t, r)
                        }),
                        (e.clearSortBy = function () {
                            y({ type: w.clearSortBy, columnId: e.id })
                        })),
                    (e.getSortByToggleProps = P(h().getSortByToggleProps, { instance: R(), column: e }))
                var i = g.find(function (e) {
                    return e.id === o
                })
                ;(e.isSorted = !!i),
                    (e.sortedIndex = g.findIndex(function (e) {
                        return e.id === o
                    })),
                    (e.isSortedDesc = e.isSorted ? i.desc : void 0)
            })
            var j = i().useMemo(
                    function () {
                        if (s || !g.length) return [r, n]
                        var e = [],
                            t = g.filter(function (e) {
                                return a.find(function (t) {
                                    return t.id === e.id
                                })
                            })
                        return [
                            (function r(n) {
                                var i = u(
                                    n,
                                    t.map(function (e) {
                                        var t = a.find(function (t) {
                                            return t.id === e.id
                                        })
                                        if (!t)
                                            throw new Error(
                                                'React-Table: Could not find a column with id: '.concat(
                                                    e.id,
                                                    ' while sorting',
                                                ),
                                            )
                                        var r = t.sortType,
                                            n = $(r) || (c || {})[r] || o[r]
                                        if (!n)
                                            throw new Error(
                                                "React-Table: Could not find a valid sortType of '"
                                                    .concat(r, "' for column '")
                                                    .concat(e.id, "'."),
                                            )
                                        return function (t, r) {
                                            return n(t, r, e.id, e.desc)
                                        }
                                    }),
                                    t.map(function (e) {
                                        var t = a.find(function (t) {
                                            return t.id === e.id
                                        })
                                        return t && t.sortInverted ? e.desc : !e.desc
                                    }),
                                )
                                return (
                                    i.forEach(function (t) {
                                        e.push(t), t.subRows && 0 !== t.subRows.length && (t.subRows = r(t.subRows))
                                    }),
                                    i
                                )
                            })(r),
                            e,
                        ]
                    },
                    [s, g, r, n, a, u, c],
                ),
                E = (function (e, t) {
                    return (
                        (function (e) {
                            if (Array.isArray(e)) return e
                        })(e) ||
                        (function (e, t) {
                            var r =
                                null == e
                                    ? null
                                    : ('undefined' != typeof Symbol && e[Symbol.iterator]) || e['@@iterator']
                            if (null != r) {
                                var n,
                                    o,
                                    a = [],
                                    i = !0,
                                    l = !1
                                try {
                                    for (
                                        r = r.call(e);
                                        !(i = (n = r.next()).done) && (a.push(n.value), !t || a.length !== t);
                                        i = !0
                                    );
                                } catch (e) {
                                    ;(l = !0), (o = e)
                                } finally {
                                    try {
                                        i || null == r.return || r.return()
                                    } finally {
                                        if (l) throw o
                                    }
                                }
                                return a
                            }
                        })(e, t) ||
                        $t(e, t) ||
                        (function () {
                            throw new TypeError(
                                'Invalid attempt to destructure non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.',
                            )
                        })()
                    )
                })(j, 2),
                C = E[0],
                x = E[1],
                I = k(v)
            N(
                function () {
                    I() && y({ type: w.resetSortBy })
                },
                [s ? null : t],
            ),
                Object.assign(e, {
                    preSortedRows: r,
                    preSortedFlatRows: n,
                    sortedRows: C,
                    sortedFlatRows: x,
                    rows: C,
                    flatRows: x,
                    setSortBy: S,
                    toggleSortBy: O,
                })
        }
        function er(e, t, r) {
            return Vt(e).sort(function (e, n) {
                for (var o = 0; o < t.length; o += 1) {
                    var a = t[o],
                        i = !1 === r[o] || 'desc' === r[o],
                        l = a(e, n)
                    if (0 !== l) return i ? -l : l
                }
                return r[0] ? e.index - n.index : n.index - e.index
            })
        }
        ;(w.resetPage = 'resetPage'),
            (w.gotoPage = 'gotoPage'),
            (w.setPageSize = 'setPageSize'),
            (w.resetPivot = 'resetPivot'),
            (w.togglePivot = 'togglePivot'),
            (w.resetSelectedRows = 'resetSelectedRows'),
            (w.toggleAllRowsSelected = 'toggleAllRowsSelected'),
            (w.toggleRowSelected = 'toggleRowSelected'),
            (w.toggleAllPageRowsSelected = 'toggleAllPageRowsSelected'),
            (w.setRowState = 'setRowState'),
            (w.setCellState = 'setCellState'),
            (w.resetRowState = 'resetRowState'),
            (w.resetColumnOrder = 'resetColumnOrder'),
            (w.setColumnOrder = 'setColumnOrder'),
            (O.canResize = !0),
            (w.columnStartResizing = 'columnStartResizing'),
            (w.columnResizing = 'columnResizing'),
            (w.columnDoneResizing = 'columnDoneResizing'),
            (w.resetResize = 'resetResize'),
            (w.columnStartResizing = 'columnStartResizing'),
            (w.columnResizing = 'columnResizing'),
            (w.columnDoneResizing = 'columnDoneResizing'),
            (w.resetResize = 'resetResize')
        var tr = window.reactR,
            rr = (function () {
                function e(e) {
                    var t = this
                    ;(this._insertTag = function (e) {
                        var r
                        ;(r =
                            0 === t.tags.length
                                ? t.insertionPoint
                                    ? t.insertionPoint.nextSibling
                                    : t.prepend
                                    ? t.container.firstChild
                                    : t.before
                                : t.tags[t.tags.length - 1].nextSibling),
                            t.container.insertBefore(e, r),
                            t.tags.push(e)
                    }),
                        (this.isSpeedy = void 0 === e.speedy || e.speedy),
                        (this.tags = []),
                        (this.ctr = 0),
                        (this.nonce = e.nonce),
                        (this.key = e.key),
                        (this.container = e.container),
                        (this.prepend = e.prepend),
                        (this.insertionPoint = e.insertionPoint),
                        (this.before = null)
                }
                var t = e.prototype
                return (
                    (t.hydrate = function (e) {
                        e.forEach(this._insertTag)
                    }),
                    (t.insert = function (e) {
                        this.ctr % (this.isSpeedy ? 65e3 : 1) == 0 &&
                            this._insertTag(
                                (function (e) {
                                    var t = document.createElement('style')
                                    return (
                                        t.setAttribute('data-emotion', e.key),
                                        void 0 !== e.nonce && t.setAttribute('nonce', e.nonce),
                                        t.appendChild(document.createTextNode('')),
                                        t.setAttribute('data-s', ''),
                                        t
                                    )
                                })(this),
                            )
                        var t = this.tags[this.tags.length - 1]
                        if (this.isSpeedy) {
                            var r = (function (e) {
                                if (e.sheet) return e.sheet
                                for (var t = 0; t < document.styleSheets.length; t++)
                                    if (document.styleSheets[t].ownerNode === e) return document.styleSheets[t]
                            })(t)
                            try {
                                r.insertRule(e, r.cssRules.length)
                            } catch (e) {}
                        } else t.appendChild(document.createTextNode(e))
                        this.ctr++
                    }),
                    (t.flush = function () {
                        this.tags.forEach(function (e) {
                            return e.parentNode && e.parentNode.removeChild(e)
                        }),
                            (this.tags = []),
                            (this.ctr = 0)
                    }),
                    e
                )
            })(),
            nr = Math.abs,
            or = String.fromCharCode,
            ar = Object.assign
        function ir(e) {
            return e.trim()
        }
        function lr(e, t, r) {
            return e.replace(t, r)
        }
        function ur(e, t) {
            return e.indexOf(t)
        }
        function cr(e, t) {
            return 0 | e.charCodeAt(t)
        }
        function sr(e, t, r) {
            return e.slice(t, r)
        }
        function fr(e) {
            return e.length
        }
        function dr(e) {
            return e.length
        }
        function pr(e, t) {
            return t.push(e), e
        }
        var gr = 1,
            yr = 1,
            mr = 0,
            hr = 0,
            br = 0,
            vr = ''
        function wr(e, t, r, n, o, a, i) {
            return {
                value: e,
                root: t,
                parent: r,
                type: n,
                props: o,
                children: a,
                line: gr,
                column: yr,
                length: i,
                return: '',
            }
        }
        function Sr(e, t) {
            return ar(wr('', null, null, '', null, null, 0), e, { length: -e.length }, t)
        }
        function Or() {
            return (br = hr > 0 ? cr(vr, --hr) : 0), yr--, 10 === br && ((yr = 1), gr--), br
        }
        function Rr() {
            return (br = hr < mr ? cr(vr, hr++) : 0), yr++, 10 === br && ((yr = 1), gr++), br
        }
        function jr() {
            return cr(vr, hr)
        }
        function Pr() {
            return hr
        }
        function Er(e, t) {
            return sr(vr, e, t)
        }
        function Cr(e) {
            switch (e) {
                case 0:
                case 9:
                case 10:
                case 13:
                case 32:
                    return 5
                case 33:
                case 43:
                case 44:
                case 47:
                case 62:
                case 64:
                case 126:
                case 59:
                case 123:
                case 125:
                    return 4
                case 58:
                    return 3
                case 34:
                case 39:
                case 40:
                case 91:
                    return 2
                case 41:
                case 93:
                    return 1
            }
            return 0
        }
        function Ar(e) {
            return (gr = yr = 1), (mr = fr((vr = e))), (hr = 0), []
        }
        function xr(e) {
            return (vr = ''), e
        }
        function kr(e) {
            return ir(Er(hr - 1, Br(91 === e ? e + 2 : 40 === e ? e + 1 : e)))
        }
        function Ir(e) {
            for (; (br = jr()) && br < 33; ) Rr()
            return Cr(e) > 2 || Cr(br) > 3 ? '' : ' '
        }
        function Nr(e, t) {
            for (; --t && Rr() && !(br < 48 || br > 102 || (br > 57 && br < 65) || (br > 70 && br < 97)); );
            return Er(e, Pr() + (t < 6 && 32 == jr() && 32 == Rr()))
        }
        function Br(e) {
            for (; Rr(); )
                switch (br) {
                    case e:
                        return hr
                    case 34:
                    case 39:
                        34 !== e && 39 !== e && Br(br)
                        break
                    case 40:
                        41 === e && Br(e)
                        break
                    case 92:
                        Rr()
                }
            return hr
        }
        function Fr(e, t) {
            for (; Rr() && e + br !== 57 && (e + br !== 84 || 47 !== jr()); );
            return '/*' + Er(t, hr - 1) + '*' + or(47 === e ? e : Rr())
        }
        function Dr(e) {
            for (; !Cr(jr()); ) Rr()
            return Er(e, hr)
        }
        var Gr = '-ms-',
            zr = '-moz-',
            Mr = '-webkit-',
            Tr = 'comm',
            Wr = 'rule',
            Hr = 'decl',
            _r = '@keyframes'
        function Lr(e, t) {
            for (var r = '', n = dr(e), o = 0; o < n; o++) r += t(e[o], o, e, t) || ''
            return r
        }
        function Vr(e, t, r, n) {
            switch (e.type) {
                case '@import':
                case Hr:
                    return (e.return = e.return || e.value)
                case Tr:
                    return ''
                case _r:
                    return (e.return = e.value + '{' + Lr(e.children, n) + '}')
                case Wr:
                    e.value = e.props.join(',')
            }
            return fr((r = Lr(e.children, n))) ? (e.return = e.value + '{' + r + '}') : ''
        }
        function $r(e, t) {
            switch (
                (function (e, t) {
                    return (((((((t << 2) ^ cr(e, 0)) << 2) ^ cr(e, 1)) << 2) ^ cr(e, 2)) << 2) ^ cr(e, 3)
                })(e, t)
            ) {
                case 5103:
                    return Mr + 'print-' + e + e
                case 5737:
                case 4201:
                case 3177:
                case 3433:
                case 1641:
                case 4457:
                case 2921:
                case 5572:
                case 6356:
                case 5844:
                case 3191:
                case 6645:
                case 3005:
                case 6391:
                case 5879:
                case 5623:
                case 6135:
                case 4599:
                case 4855:
                case 4215:
                case 6389:
                case 5109:
                case 5365:
                case 5621:
                case 3829:
                    return Mr + e + e
                case 5349:
                case 4246:
                case 4810:
                case 6968:
                case 2756:
                    return Mr + e + zr + e + Gr + e + e
                case 6828:
                case 4268:
                    return Mr + e + Gr + e + e
                case 6165:
                    return Mr + e + Gr + 'flex-' + e + e
                case 5187:
                    return Mr + e + lr(e, /(\w+).+(:[^]+)/, '-webkit-box-$1$2-ms-flex-$1$2') + e
                case 5443:
                    return Mr + e + Gr + 'flex-item-' + lr(e, /flex-|-self/, '') + e
                case 4675:
                    return Mr + e + Gr + 'flex-line-pack' + lr(e, /align-content|flex-|-self/, '') + e
                case 5548:
                    return Mr + e + Gr + lr(e, 'shrink', 'negative') + e
                case 5292:
                    return Mr + e + Gr + lr(e, 'basis', 'preferred-size') + e
                case 6060:
                    return Mr + 'box-' + lr(e, '-grow', '') + Mr + e + Gr + lr(e, 'grow', 'positive') + e
                case 4554:
                    return Mr + lr(e, /([^-])(transform)/g, '$1-webkit-$2') + e
                case 6187:
                    return lr(lr(lr(e, /(zoom-|grab)/, Mr + '$1'), /(image-set)/, Mr + '$1'), e, '') + e
                case 5495:
                case 3959:
                    return lr(e, /(image-set\([^]*)/, Mr + '$1$`$1')
                case 4968:
                    return (
                        lr(lr(e, /(.+:)(flex-)?(.*)/, '-webkit-box-pack:$3-ms-flex-pack:$3'), /s.+-b[^;]+/, 'justify') +
                        Mr +
                        e +
                        e
                    )
                case 4095:
                case 3583:
                case 4068:
                case 2532:
                    return lr(e, /(.+)-inline(.+)/, Mr + '$1$2') + e
                case 8116:
                case 7059:
                case 5753:
                case 5535:
                case 5445:
                case 5701:
                case 4933:
                case 4677:
                case 5533:
                case 5789:
                case 5021:
                case 4765:
                    if (fr(e) - 1 - t > 6)
                        switch (cr(e, t + 1)) {
                            case 109:
                                if (45 !== cr(e, t + 4)) break
                            case 102:
                                return (
                                    lr(
                                        e,
                                        /(.+:)(.+)-([^]+)/,
                                        '$1-webkit-$2-$3$1' + zr + (108 == cr(e, t + 3) ? '$3' : '$2-$3'),
                                    ) + e
                                )
                            case 115:
                                return ~ur(e, 'stretch') ? $r(lr(e, 'stretch', 'fill-available'), t) + e : e
                        }
                    break
                case 4949:
                    if (115 !== cr(e, t + 1)) break
                case 6444:
                    switch (cr(e, fr(e) - 3 - (~ur(e, '!important') && 10))) {
                        case 107:
                            return lr(e, ':', ':' + Mr) + e
                        case 101:
                            return (
                                lr(
                                    e,
                                    /(.+:)([^;!]+)(;|!.+)?/,
                                    '$1' +
                                        Mr +
                                        (45 === cr(e, 14) ? 'inline-' : '') +
                                        'box$3$1' +
                                        Mr +
                                        '$2$3$1' +
                                        Gr +
                                        '$2box$3',
                                ) + e
                            )
                    }
                    break
                case 5936:
                    switch (cr(e, t + 11)) {
                        case 114:
                            return Mr + e + Gr + lr(e, /[svh]\w+-[tblr]{2}/, 'tb') + e
                        case 108:
                            return Mr + e + Gr + lr(e, /[svh]\w+-[tblr]{2}/, 'tb-rl') + e
                        case 45:
                            return Mr + e + Gr + lr(e, /[svh]\w+-[tblr]{2}/, 'lr') + e
                    }
                    return Mr + e + Gr + e + e
            }
            return e
        }
        function Ur(e) {
            return xr(Kr('', null, null, null, [''], (e = Ar(e)), 0, [0], e))
        }
        function Kr(e, t, r, n, o, a, i, l, u) {
            for (
                var c = 0,
                    s = 0,
                    f = i,
                    d = 0,
                    p = 0,
                    g = 0,
                    y = 1,
                    m = 1,
                    h = 1,
                    b = 0,
                    v = '',
                    w = o,
                    S = a,
                    O = n,
                    R = v;
                m;

            )
                switch (((g = b), (b = Rr()))) {
                    case 40:
                        if (108 != g && 58 == R.charCodeAt(f - 1)) {
                            ;-1 != ur((R += lr(kr(b), '&', '&\f')), '&\f') && (h = -1)
                            break
                        }
                    case 34:
                    case 39:
                    case 91:
                        R += kr(b)
                        break
                    case 9:
                    case 10:
                    case 13:
                    case 32:
                        R += Ir(g)
                        break
                    case 92:
                        R += Nr(Pr() - 1, 7)
                        continue
                    case 47:
                        switch (jr()) {
                            case 42:
                            case 47:
                                pr(Jr(Fr(Rr(), Pr()), t, r), u)
                                break
                            default:
                                R += '/'
                        }
                        break
                    case 123 * y:
                        l[c++] = fr(R) * h
                    case 125 * y:
                    case 59:
                    case 0:
                        switch (b) {
                            case 0:
                            case 125:
                                m = 0
                            case 59 + s:
                                p > 0 &&
                                    fr(R) - f &&
                                    pr(p > 32 ? qr(R + ';', n, r, f - 1) : qr(lr(R, ' ', '') + ';', n, r, f - 2), u)
                                break
                            case 59:
                                R += ';'
                            default:
                                if ((pr((O = Xr(R, t, r, c, s, o, l, v, (w = []), (S = []), f)), a), 123 === b))
                                    if (0 === s) Kr(R, t, O, O, w, a, f, l, S)
                                    else
                                        switch (d) {
                                            case 100:
                                            case 109:
                                            case 115:
                                                Kr(
                                                    e,
                                                    O,
                                                    O,
                                                    n && pr(Xr(e, O, O, 0, 0, o, l, v, o, (w = []), f), S),
                                                    o,
                                                    S,
                                                    f,
                                                    l,
                                                    n ? w : S,
                                                )
                                                break
                                            default:
                                                Kr(R, O, O, O, [''], S, 0, l, S)
                                        }
                        }
                        ;(c = s = p = 0), (y = h = 1), (v = R = ''), (f = i)
                        break
                    case 58:
                        ;(f = 1 + fr(R)), (p = g)
                    default:
                        if (y < 1)
                            if (123 == b) --y
                            else if (125 == b && 0 == y++ && 125 == Or()) continue
                        switch (((R += or(b)), b * y)) {
                            case 38:
                                h = s > 0 ? 1 : ((R += '\f'), -1)
                                break
                            case 44:
                                ;(l[c++] = (fr(R) - 1) * h), (h = 1)
                                break
                            case 64:
                                45 === jr() && (R += kr(Rr())), (d = jr()), (s = f = fr((v = R += Dr(Pr())))), b++
                                break
                            case 45:
                                45 === g && 2 == fr(R) && (y = 0)
                        }
                }
            return a
        }
        function Xr(e, t, r, n, o, a, i, l, u, c, s) {
            for (var f = o - 1, d = 0 === o ? a : [''], p = dr(d), g = 0, y = 0, m = 0; g < n; ++g)
                for (var h = 0, b = sr(e, f + 1, (f = nr((y = i[g])))), v = e; h < p; ++h)
                    (v = ir(y > 0 ? d[h] + ' ' + b : lr(b, /&\f/g, d[h]))) && (u[m++] = v)
            return wr(e, t, r, 0 === o ? Wr : l, u, c, s)
        }
        function Jr(e, t, r) {
            return wr(e, t, r, Tr, or(br), sr(e, 2, -2), 0)
        }
        function qr(e, t, r, n) {
            return wr(e, t, r, Hr, sr(e, 0, n), sr(e, n + 1, -1), n)
        }
        var Zr = function (e, t, r) {
                for (var n = 0, o = 0; (n = o), (o = jr()), 38 === n && 12 === o && (t[r] = 1), !Cr(o); ) Rr()
                return Er(e, hr)
            },
            Yr = new WeakMap(),
            Qr = function (e) {
                if ('rule' === e.type && e.parent && !(e.length < 1)) {
                    for (
                        var t = e.value, r = e.parent, n = e.column === r.column && e.line === r.line;
                        'rule' !== r.type;

                    )
                        if (!(r = r.parent)) return
                    if ((1 !== e.props.length || 58 === t.charCodeAt(0) || Yr.get(r)) && !n) {
                        Yr.set(e, !0)
                        for (
                            var o = [],
                                a = (function (e, t) {
                                    return xr(
                                        (function (e, t) {
                                            var r = -1,
                                                n = 44
                                            do {
                                                switch (Cr(n)) {
                                                    case 0:
                                                        38 === n && 12 === jr() && (t[r] = 1),
                                                            (e[r] += Zr(hr - 1, t, r))
                                                        break
                                                    case 2:
                                                        e[r] += kr(n)
                                                        break
                                                    case 4:
                                                        if (44 === n) {
                                                            ;(e[++r] = 58 === jr() ? '&\f' : ''), (t[r] = e[r].length)
                                                            break
                                                        }
                                                    default:
                                                        e[r] += or(n)
                                                }
                                            } while ((n = Rr()))
                                            return e
                                        })(Ar(e), t),
                                    )
                                })(t, o),
                                i = r.props,
                                l = 0,
                                u = 0;
                            l < a.length;
                            l++
                        )
                            for (var c = 0; c < i.length; c++, u++)
                                e.props[u] = o[l] ? a[l].replace(/&\f/g, i[c]) : i[c] + ' ' + a[l]
                    }
                }
            },
            en = function (e) {
                if ('decl' === e.type) {
                    var t = e.value
                    108 === t.charCodeAt(0) && 98 === t.charCodeAt(2) && ((e.return = ''), (e.value = ''))
                }
            },
            tn = [
                function (e, t, r, n) {
                    if (e.length > -1 && !e.return)
                        switch (e.type) {
                            case Hr:
                                e.return = $r(e.value, e.length)
                                break
                            case _r:
                                return Lr([Sr(e, { value: lr(e.value, '@', '@' + Mr) })], n)
                            case Wr:
                                if (e.length)
                                    return (function (e, t) {
                                        return e.map(t).join('')
                                    })(e.props, function (t) {
                                        switch (
                                            (function (e, t) {
                                                return (e = /(::plac\w+|:read-\w+)/.exec(e)) ? e[0] : e
                                            })(t)
                                        ) {
                                            case ':read-only':
                                            case ':read-write':
                                                return Lr([Sr(e, { props: [lr(t, /:(read-\w+)/, ':-moz-$1')] })], n)
                                            case '::placeholder':
                                                return Lr(
                                                    [
                                                        Sr(e, { props: [lr(t, /:(plac\w+)/, ':-webkit-input-$1')] }),
                                                        Sr(e, { props: [lr(t, /:(plac\w+)/, ':-moz-$1')] }),
                                                        Sr(e, { props: [lr(t, /:(plac\w+)/, Gr + 'input-$1')] }),
                                                    ],
                                                    n,
                                                )
                                        }
                                        return ''
                                    })
                        }
                },
            ],
            rn = function (e) {
                for (var t, r = 0, n = 0, o = e.length; o >= 4; ++n, o -= 4)
                    (t =
                        1540483477 *
                            (65535 &
                                (t =
                                    (255 & e.charCodeAt(n)) |
                                    ((255 & e.charCodeAt(++n)) << 8) |
                                    ((255 & e.charCodeAt(++n)) << 16) |
                                    ((255 & e.charCodeAt(++n)) << 24))) +
                        ((59797 * (t >>> 16)) << 16)),
                        (r =
                            (1540483477 * (65535 & (t ^= t >>> 24)) + ((59797 * (t >>> 16)) << 16)) ^
                            (1540483477 * (65535 & r) + ((59797 * (r >>> 16)) << 16)))
                switch (o) {
                    case 3:
                        r ^= (255 & e.charCodeAt(n + 2)) << 16
                    case 2:
                        r ^= (255 & e.charCodeAt(n + 1)) << 8
                    case 1:
                        r = 1540483477 * (65535 & (r ^= 255 & e.charCodeAt(n))) + ((59797 * (r >>> 16)) << 16)
                }
                return (
                    ((r = 1540483477 * (65535 & (r ^= r >>> 13)) + ((59797 * (r >>> 16)) << 16)) ^ (r >>> 15)) >>>
                    0
                ).toString(36)
            },
            nn = {
                animationIterationCount: 1,
                borderImageOutset: 1,
                borderImageSlice: 1,
                borderImageWidth: 1,
                boxFlex: 1,
                boxFlexGroup: 1,
                boxOrdinalGroup: 1,
                columnCount: 1,
                columns: 1,
                flex: 1,
                flexGrow: 1,
                flexPositive: 1,
                flexShrink: 1,
                flexNegative: 1,
                flexOrder: 1,
                gridRow: 1,
                gridRowEnd: 1,
                gridRowSpan: 1,
                gridRowStart: 1,
                gridColumn: 1,
                gridColumnEnd: 1,
                gridColumnSpan: 1,
                gridColumnStart: 1,
                msGridRow: 1,
                msGridRowSpan: 1,
                msGridColumn: 1,
                msGridColumnSpan: 1,
                fontWeight: 1,
                lineHeight: 1,
                opacity: 1,
                order: 1,
                orphans: 1,
                tabSize: 1,
                widows: 1,
                zIndex: 1,
                zoom: 1,
                WebkitLineClamp: 1,
                fillOpacity: 1,
                floodOpacity: 1,
                stopOpacity: 1,
                strokeDasharray: 1,
                strokeDashoffset: 1,
                strokeMiterlimit: 1,
                strokeOpacity: 1,
                strokeWidth: 1,
            },
            on = /[A-Z]|^ms/g,
            an = /_EMO_([^_]+?)_([^]*?)_EMO_/g,
            ln = function (e) {
                return 45 === e.charCodeAt(1)
            },
            un = function (e) {
                return null != e && 'boolean' != typeof e
            },
            cn = (function (e) {
                var t = Object.create(null)
                return function (e) {
                    return void 0 === t[e] && (t[e] = ln((r = e)) ? r : r.replace(on, '-$&').toLowerCase()), t[e]
                    var r
                }
            })(),
            sn = function (e, t) {
                switch (e) {
                    case 'animation':
                    case 'animationName':
                        if ('string' == typeof t)
                            return t.replace(an, function (e, t, r) {
                                return (dn = { name: t, styles: r, next: dn }), t
                            })
                }
                return 1 === nn[e] || ln(e) || 'number' != typeof t || 0 === t ? t : t + 'px'
            }
        function fn(e, t, r) {
            if (null == r) return ''
            if (void 0 !== r.__emotion_styles) return r
            switch (typeof r) {
                case 'boolean':
                    return ''
                case 'object':
                    if (1 === r.anim) return (dn = { name: r.name, styles: r.styles, next: dn }), r.name
                    if (void 0 !== r.styles) {
                        var n = r.next
                        if (void 0 !== n)
                            for (; void 0 !== n; ) (dn = { name: n.name, styles: n.styles, next: dn }), (n = n.next)
                        return r.styles + ';'
                    }
                    return (function (e, t, r) {
                        var n = ''
                        if (Array.isArray(r)) for (var o = 0; o < r.length; o++) n += fn(e, t, r[o]) + ';'
                        else
                            for (var a in r) {
                                var i = r[a]
                                if ('object' != typeof i)
                                    null != t && void 0 !== t[i]
                                        ? (n += a + '{' + t[i] + '}')
                                        : un(i) && (n += cn(a) + ':' + sn(a, i) + ';')
                                else if (
                                    !Array.isArray(i) ||
                                    'string' != typeof i[0] ||
                                    (null != t && void 0 !== t[i[0]])
                                ) {
                                    var l = fn(e, t, i)
                                    switch (a) {
                                        case 'animation':
                                        case 'animationName':
                                            n += cn(a) + ':' + l + ';'
                                            break
                                        default:
                                            n += a + '{' + l + '}'
                                    }
                                } else
                                    for (var u = 0; u < i.length; u++)
                                        un(i[u]) && (n += cn(a) + ':' + sn(a, i[u]) + ';')
                            }
                        return n
                    })(e, t, r)
                case 'function':
                    if (void 0 !== e) {
                        var o = dn,
                            a = r(e)
                        return (dn = o), fn(e, t, a)
                    }
            }
            if (null == t) return r
            var i = t[r]
            return void 0 !== i ? i : r
        }
        var dn,
            pn = /label:\s*([^\s;\n{]+)\s*(;|$)/g,
            gn = function (e, t, r) {
                if (1 === e.length && 'object' == typeof e[0] && null !== e[0] && void 0 !== e[0].styles) return e[0]
                var n = !0,
                    o = ''
                dn = void 0
                var a = e[0]
                null == a || void 0 === a.raw ? ((n = !1), (o += fn(r, t, a))) : (o += a[0])
                for (var i = 1; i < e.length; i++) (o += fn(r, t, e[i])), n && (o += a[i])
                pn.lastIndex = 0
                for (var l, u = ''; null !== (l = pn.exec(o)); ) u += '-' + l[1]
                return { name: rn(o) + u, styles: o, next: dn }
            }
        function yn(e, t, r) {
            var n = ''
            return (
                r.split(' ').forEach(function (r) {
                    void 0 !== e[r] ? t.push(e[r] + ';') : (n += r + ' ')
                }),
                n
            )
        }
        var mn = function (e, t, r) {
            !(function (e, t, r) {
                var n = e.key + '-' + t.name
                !1 === r && void 0 === e.registered[n] && (e.registered[n] = t.styles)
            })(e, t, r)
            var n = e.key + '-' + t.name
            if (void 0 === e.inserted[t.name]) {
                var o = t
                do {
                    e.insert(t === o ? '.' + n : '', o, e.sheet, !0), (o = o.next)
                } while (void 0 !== o)
            }
        }
        function hn(e, t) {
            if (void 0 === e.inserted[t.name]) return e.insert('', t, e.sheet, !0)
        }
        function bn(e, t, r) {
            var n = [],
                o = yn(e, n, r)
            return n.length < 2 ? r : o + t(n)
        }
        var vn,
            wn = function e(t) {
                for (var r = '', n = 0; n < t.length; n++) {
                    var o = t[n]
                    if (null != o) {
                        var a = void 0
                        switch (typeof o) {
                            case 'boolean':
                                break
                            case 'object':
                                if (Array.isArray(o)) a = e(o)
                                else for (var i in ((a = ''), o)) o[i] && i && (a && (a += ' '), (a += i))
                                break
                            default:
                                a = o
                        }
                        a && (r && (r += ' '), (r += a))
                    }
                }
                return r
            },
            Sn = function (e) {
                var t = (function (e) {
                    var t = e.key
                    if ('css' === t) {
                        var r = document.querySelectorAll('style[data-emotion]:not([data-s])')
                        Array.prototype.forEach.call(r, function (e) {
                            ;-1 !== e.getAttribute('data-emotion').indexOf(' ') &&
                                (document.head.appendChild(e), e.setAttribute('data-s', ''))
                        })
                    }
                    var n,
                        o,
                        a = e.stylisPlugins || tn,
                        i = {},
                        l = []
                    ;(n = e.container || document.head),
                        Array.prototype.forEach.call(
                            document.querySelectorAll('style[data-emotion^="' + t + ' "]'),
                            function (e) {
                                for (var t = e.getAttribute('data-emotion').split(' '), r = 1; r < t.length; r++)
                                    i[t[r]] = !0
                                l.push(e)
                            },
                        )
                    var u,
                        c,
                        s,
                        f,
                        d = [
                            Vr,
                            ((f = function (e) {
                                u.insert(e)
                            }),
                            function (e) {
                                e.root || ((e = e.return) && f(e))
                            }),
                        ],
                        p =
                            ((c = [Qr, en].concat(a, d)),
                            (s = dr(c)),
                            function (e, t, r, n) {
                                for (var o = '', a = 0; a < s; a++) o += c[a](e, t, r, n) || ''
                                return o
                            })
                    o = function (e, t, r, n) {
                        ;(u = r), Lr(Ur(e ? e + '{' + t.styles + '}' : t.styles), p), n && (g.inserted[t.name] = !0)
                    }
                    var g = {
                        key: t,
                        sheet: new rr({
                            key: t,
                            container: n,
                            nonce: e.nonce,
                            speedy: e.speedy,
                            prepend: e.prepend,
                            insertionPoint: e.insertionPoint,
                        }),
                        nonce: e.nonce,
                        inserted: i,
                        registered: {},
                        insert: o,
                    }
                    return g.sheet.hydrate(l), g
                })(e)
                ;(t.sheet.speedy = function (e) {
                    this.isSpeedy = e
                }),
                    (t.compat = !0)
                var r = function () {
                    for (var e = arguments.length, r = new Array(e), n = 0; n < e; n++) r[n] = arguments[n]
                    var o = gn(r, t.registered, void 0)
                    return mn(t, o, !1), t.key + '-' + o.name
                }
                return {
                    css: r,
                    cx: function () {
                        for (var e = arguments.length, n = new Array(e), o = 0; o < e; o++) n[o] = arguments[o]
                        return bn(t.registered, r, wn(n))
                    },
                    injectGlobal: function () {
                        for (var e = arguments.length, r = new Array(e), n = 0; n < e; n++) r[n] = arguments[n]
                        var o = gn(r, t.registered)
                        hn(t, o)
                    },
                    keyframes: function () {
                        for (var e = arguments.length, r = new Array(e), n = 0; n < e; n++) r[n] = arguments[n]
                        var o = gn(r, t.registered),
                            a = 'animation-' + o.name
                        return hn(t, { name: o.name, styles: '@keyframes ' + a + '{' + o.styles + '}' }), a
                    },
                    hydrate: function (e) {
                        e.forEach(function (e) {
                            t.inserted[e] = !0
                        })
                    },
                    flush: function () {
                        ;(t.registered = {}), (t.inserted = {}), t.sheet.flush()
                    },
                    sheet: t.sheet,
                    cache: t,
                    getRegisteredStyles: yn.bind(null, t.registered),
                    merge: bn.bind(null, t.registered, r),
                }
            }
        function On(e, t) {
            var r = ('undefined' != typeof Symbol && e[Symbol.iterator]) || e['@@iterator']
            if (!r) {
                if (
                    Array.isArray(e) ||
                    (r = (function (e, t) {
                        if (e) {
                            if ('string' == typeof e) return Rn(e, t)
                            var r = Object.prototype.toString.call(e).slice(8, -1)
                            return (
                                'Object' === r && e.constructor && (r = e.constructor.name),
                                'Map' === r || 'Set' === r
                                    ? Array.from(e)
                                    : 'Arguments' === r || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(r)
                                    ? Rn(e, t)
                                    : void 0
                            )
                        }
                    })(e)) ||
                    (t && e && 'number' == typeof e.length)
                ) {
                    r && (e = r)
                    var n = 0,
                        o = function () {}
                    return {
                        s: o,
                        n: function () {
                            return n >= e.length ? { done: !0 } : { done: !1, value: e[n++] }
                        },
                        e: function (e) {
                            throw e
                        },
                        f: o,
                    }
                }
                throw new TypeError(
                    'Invalid attempt to iterate non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.',
                )
            }
            var a,
                i = !0,
                l = !1
            return {
                s: function () {
                    r = r.call(e)
                },
                n: function () {
                    var e = r.next()
                    return (i = e.done), e
                },
                e: function (e) {
                    ;(l = !0), (a = e)
                },
                f: function () {
                    try {
                        i || null == r.return || r.return()
                    } finally {
                        if (l) throw a
                    }
                },
            }
        }
        function Rn(e, t) {
            ;(null == t || t > e.length) && (t = e.length)
            for (var r = 0, n = new Array(t); r < t; r++) n[r] = e[r]
            return n
        }
        function jn(e, t) {
            var r = Object.keys(e)
            if (Object.getOwnPropertySymbols) {
                var n = Object.getOwnPropertySymbols(e)
                t &&
                    (n = n.filter(function (t) {
                        return Object.getOwnPropertyDescriptor(e, t).enumerable
                    })),
                    r.push.apply(r, n)
            }
            return r
        }
        function Pn(e, t, r) {
            return (
                t in e
                    ? Object.defineProperty(e, t, { value: r, enumerable: !0, configurable: !0, writable: !0 })
                    : (e[t] = r),
                e
            )
        }
        function En() {
            for (var e = arguments.length, t = new Array(e), r = 0; r < e; r++) t[r] = arguments[r]
            return t
                .filter(function (e) {
                    return e
                })
                .join(' ')
        }
        function Cn() {
            for (var e = arguments.length, t = new Array(e), r = 0; r < e; r++) t[r] = arguments[r]
            return t.find(function (e) {
                return null != e
            })
        }
        function An(e) {
            return e.replace(/[.*+?^${}()|[\]\\]/g, '\\$&')
        }
        function xn(e) {
            var t = []
            return (
                (function e(r) {
                    r.columns ? r.columns.forEach(e) : t.push(r)
                })(e),
                t
            )
        }
        function kn(e) {
            return e.map(function (e) {
                return e.subRows && e.subRows.length > 0
                    ? (function (e) {
                          for (var t = 1; t < arguments.length; t++) {
                              var r = null != arguments[t] ? arguments[t] : {}
                              t % 2
                                  ? jn(Object(r), !0).forEach(function (t) {
                                        Pn(e, t, r[t])
                                    })
                                  : Object.getOwnPropertyDescriptors
                                  ? Object.defineProperties(e, Object.getOwnPropertyDescriptors(r))
                                  : jn(Object(r)).forEach(function (t) {
                                        Object.defineProperty(e, t, Object.getOwnPropertyDescriptor(r, t))
                                    })
                          }
                          return e
                      })({ _subRows: kn(e.subRows) }, e.values)
                    : e.values
            })
        }
        function In(e) {
            var t = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : {},
                r = t.columnIds,
                n = t.headers,
                o = void 0 === n || n,
                a = t.sep,
                i = void 0 === a ? ',' : a,
                l = t.dec,
                u = void 0 === l ? '.' : l,
                c = function (e) {
                    return e
                        .map(function (e) {
                            return (
                                null == e && (e = ''),
                                e instanceof Date
                                    ? (e = e.toISOString())
                                    : 'string' != typeof e && 'number' != typeof e
                                    ? (e = JSON.stringify(e))
                                    : '.' !== u && 'number' == typeof e && (e = e.toString().replace('.', u)),
                                'string' == typeof e &&
                                    (e.includes('"') || e.includes(i)) &&
                                    (e = '"'.concat(e.replace(/"/g, '""'), '"')),
                                e
                            )
                        })
                        .join(i)
                },
                s = []
            r || (r = e.length > 0 ? Object.keys(e[0]) : []), o && s.push(c(r))
            var f,
                d = On(e)
            try {
                var p = function () {
                    var e = f.value,
                        t = r.map(function (t) {
                            return e[t]
                        })
                    s.push(c(t))
                }
                for (d.s(); !(f = d.n()).done; ) p()
            } catch (e) {
                d.e(e)
            } finally {
                d.f()
            }
            return s.join('\n') + '\n'
        }
        function Nn(e, t) {
            var r = new Blob([e], { type: 'text/csv;charset=utf-8' })
            if (window.navigator.msSaveBlob) window.navigator.msSaveBlob(r, t)
            else {
                var n = document.createElement('a'),
                    o = window.URL.createObjectURL(r)
                ;(n.href = o), (n.download = t), n.click(), window.URL.revokeObjectURL(o)
            }
        }
        function Bn() {
            return 'undefined' != typeof document
        }
        function Fn(e) {
            return (
                (Fn =
                    'function' == typeof Symbol && 'symbol' == typeof Symbol.iterator
                        ? function (e) {
                              return typeof e
                          }
                        : function (e) {
                              return e &&
                                  'function' == typeof Symbol &&
                                  e.constructor === Symbol &&
                                  e !== Symbol.prototype
                                  ? 'symbol'
                                  : typeof e
                          }),
                Fn(e)
            )
        }
        function Dn(e, t) {
            return (
                (function (e) {
                    if (Array.isArray(e)) return e
                })(e) ||
                (function (e, t) {
                    var r = null == e ? null : ('undefined' != typeof Symbol && e[Symbol.iterator]) || e['@@iterator']
                    if (null != r) {
                        var n,
                            o,
                            a = [],
                            i = !0,
                            l = !1
                        try {
                            for (
                                r = r.call(e);
                                !(i = (n = r.next()).done) && (a.push(n.value), !t || a.length !== t);
                                i = !0
                            );
                        } catch (e) {
                            ;(l = !0), (o = e)
                        } finally {
                            try {
                                i || null == r.return || r.return()
                            } finally {
                                if (l) throw o
                            }
                        }
                        return a
                    }
                })(e, t) ||
                Gn(e, t) ||
                (function () {
                    throw new TypeError(
                        'Invalid attempt to destructure non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.',
                    )
                })()
            )
        }
        function Gn(e, t) {
            if (e) {
                if ('string' == typeof e) return zn(e, t)
                var r = Object.prototype.toString.call(e).slice(8, -1)
                return (
                    'Object' === r && e.constructor && (r = e.constructor.name),
                    'Map' === r || 'Set' === r
                        ? Array.from(e)
                        : 'Arguments' === r || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(r)
                        ? zn(e, t)
                        : void 0
                )
            }
        }
        function zn(e, t) {
            ;(null == t || t > e.length) && (t = e.length)
            for (var r = 0, n = new Array(t); r < t; r++) n[r] = e[r]
            return n
        }
        function Mn(e, t) {
            var r = Object.keys(e)
            if (Object.getOwnPropertySymbols) {
                var n = Object.getOwnPropertySymbols(e)
                t &&
                    (n = n.filter(function (t) {
                        return Object.getOwnPropertyDescriptor(e, t).enumerable
                    })),
                    r.push.apply(r, n)
            }
            return r
        }
        function Tn(e) {
            for (var t = 1; t < arguments.length; t++) {
                var r = null != arguments[t] ? arguments[t] : {}
                t % 2
                    ? Mn(Object(r), !0).forEach(function (t) {
                          Wn(e, t, r[t])
                      })
                    : Object.getOwnPropertyDescriptors
                    ? Object.defineProperties(e, Object.getOwnPropertyDescriptors(r))
                    : Mn(Object(r)).forEach(function (t) {
                          Object.defineProperty(e, t, Object.getOwnPropertyDescriptor(r, t))
                      })
            }
            return e
        }
        function Wn(e, t, r) {
            return (
                t in e
                    ? Object.defineProperty(e, t, { value: r, enumerable: !0, configurable: !0, writable: !0 })
                    : (e[t] = r),
                e
            )
        }
        function Hn(e) {
            if (!e) return null
            var t = e.color,
                r = e.backgroundColor,
                n = e.borderColor,
                o = e.borderWidth,
                a = e.stripedColor,
                i = e.highlightColor,
                l = e.cellPadding,
                u = e.style,
                c = e.tableBorderColor,
                s = void 0 === c ? n : c,
                f = e.tableBorderWidth,
                d = void 0 === f ? o : f,
                p = e.tableStyle,
                g = e.headerBorderColor,
                y = void 0 === g ? n : g,
                m = e.headerBorderWidth,
                h = void 0 === m ? o : m,
                b = e.headerStyle,
                v = e.groupHeaderBorderColor,
                w = void 0 === v ? n : v,
                S = e.groupHeaderBorderWidth,
                O = void 0 === S ? o : S,
                R = e.groupHeaderStyle,
                j = e.tableBodyStyle,
                P = e.rowGroupStyle,
                E = e.rowStyle,
                C = e.rowStripedStyle,
                A = e.rowHighlightStyle,
                x = e.rowSelectedStyle,
                k = e.cellBorderColor,
                I = void 0 === k ? n : k,
                N = e.cellBorderWidth,
                B = void 0 === N ? o : N,
                F = e.cellStyle,
                D = e.footerBorderColor,
                G = void 0 === D ? n : D,
                z = e.footerBorderWidth,
                M = void 0 === z ? o : z,
                T = e.footerStyle,
                W = e.inputStyle,
                H = e.filterInputStyle,
                _ = e.searchInputStyle,
                L = e.selectStyle,
                V = e.paginationStyle,
                $ = e.pageButtonStyle,
                U = e.pageButtonHoverStyle,
                K = e.pageButtonActiveStyle,
                X = e.pageButtonCurrentStyle,
                J = _n([F, E, j, p, u], 'color', t),
                q = _n([L, u], 'color', t)
            h = _n([b], 'borderWidth', h)
            var Z,
                Y = {
                    style: Tn({ color: t, backgroundColor: r }, u),
                    tableStyle: Tn({ borderColor: s, borderWidth: d }, p),
                    headerStyle: Tn(
                        Tn({ borderColor: y, borderWidth: h, padding: l }, b),
                        {},
                        { '.rt-bordered &, .rt-outlined &': { borderWidth: h } },
                    ),
                    groupHeaderStyle: Tn(
                        Tn({ borderColor: w, borderWidth: O, padding: l }, R),
                        {},
                        { '&::after': { backgroundColor: w, height: O }, '.rt-bordered &': { borderWidth: O } },
                    ),
                    tableBodyStyle: j,
                    rowGroupStyle: P,
                    rowStyle: Tn(
                        Tn({}, E),
                        {},
                        {
                            '&.rt-tr-striped': Tn({ backgroundColor: a }, C),
                            '&.rt-tr-highlight:hover': Tn({ backgroundColor: i }, A),
                            '&.rt-tr-selected': Tn({}, x),
                        },
                    ),
                    cellStyle: Tn({ borderColor: I, borderWidth: B, padding: l }, F),
                    footerStyle: Tn({ borderColor: G, borderWidth: M, padding: l }, T),
                    filterCellStyle: Tn({ borderColor: I, borderWidth: B, padding: l }, F),
                    expanderStyle: { '&::after': { borderTopColor: J } },
                    filterInputStyle: Tn(Tn({}, W), H),
                    searchInputStyle: Tn(Tn({}, W), _),
                    paginationStyle: Tn(
                        Tn({ borderTopColor: I, borderTopWidth: B }, V),
                        {},
                        {
                            '.rt-page-jump': Tn({}, W),
                            '.rt-page-size-select': Tn(
                                Tn({}, L),
                                {},
                                {
                                    '@supports (-moz-appearance: none)': {
                                        backgroundImage:
                                            q &&
                                            'url(\'data:image/svg+xml;charset=US-ASCII,<svg width="24" height="24" xmlns="http://www.w3.org/2000/svg">' +
                                                '<path fill="'.concat(
                                                    ((Z = q),
                                                    encodeURIComponent(Z).replace('(', '%28').replace(')', '%29')),
                                                    '" d="M24 1.5l-12 21-12-21h24z"/></svg>\')',
                                                ),
                                    },
                                },
                            ),
                            '.rt-page-button': Tn({}, $),
                            '.rt-page-button:not(:disabled):hover': Tn({}, U),
                            '.rt-page-button:not(:disabled):active': Tn({}, K),
                            '.rt-keyboard-active & .rt-page-button:not(:disabled):focus': Tn({}, U),
                            '.rt-page-button-current': Tn({}, X),
                        },
                    ),
                }
            return Ln(Y), Y
        }
        function _n(e, t, r) {
            var n = e.find(function (e) {
                return e && null != e[t]
            })
            return n ? n[t] : r
        }
        function Ln(e) {
            for (var t = 0, r = Object.entries(e); t < r.length; t++) {
                var n = Dn(r[t], 2),
                    o = n[0],
                    a = n[1]
                'object' === Fn(a) ? (Ln(a), 0 === Object.keys(a).length && delete e[o]) : null == a && delete e[o]
            }
        }
        function Vn() {
            if (vn) return vn
            var e, t
            if (Bn()) {
                var r,
                    n = (function (e, t) {
                        var r = ('undefined' != typeof Symbol && e[Symbol.iterator]) || e['@@iterator']
                        if (!r) {
                            if (Array.isArray(e) || (r = Gn(e))) {
                                r && (e = r)
                                var n = 0,
                                    o = function () {}
                                return {
                                    s: o,
                                    n: function () {
                                        return n >= e.length ? { done: !0 } : { done: !1, value: e[n++] }
                                    },
                                    e: function (e) {
                                        throw e
                                    },
                                    f: o,
                                }
                            }
                            throw new TypeError(
                                'Invalid attempt to iterate non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.',
                            )
                        }
                        var a,
                            i = !0,
                            l = !1
                        return {
                            s: function () {
                                r = r.call(e)
                            },
                            n: function () {
                                var e = r.next()
                                return (i = e.done), e
                            },
                            e: function (e) {
                                ;(l = !0), (a = e)
                            },
                            f: function () {
                                try {
                                    i || null == r.return || r.return()
                                } finally {
                                    if (l) throw a
                                }
                            },
                        }
                    })(document.querySelectorAll('link'))
                try {
                    for (n.s(); !(r = n.n()).done; ) {
                        var o = r.value,
                            a = o.href.substring(o.href.lastIndexOf('/') + 1)
                        if ('stylesheet' === o.rel && 'reactable.css' === a) {
                            ;(e = o.parentElement), (t = o)
                            break
                        }
                    }
                } catch (e) {
                    n.e(e)
                } finally {
                    n.f()
                }
            }
            return (vn = Sn({ key: 'reactable', container: e, insertionPoint: t }))
        }
        function $n() {
            for (var e = arguments.length, t = new Array(e), r = 0; r < e; r++) t[r] = arguments[r]
            var n = Vn()
            return (t = t.filter(function (e) {
                return null != e
            })).length
                ? n.css(t)
                : null
        }
        function Un(e) {
            return (
                (Un =
                    'function' == typeof Symbol && 'symbol' == typeof Symbol.iterator
                        ? function (e) {
                              return typeof e
                          }
                        : function (e) {
                              return e &&
                                  'function' == typeof Symbol &&
                                  e.constructor === Symbol &&
                                  e !== Symbol.prototype
                                  ? 'symbol'
                                  : typeof e
                          }),
                Un(e)
            )
        }
        var Kn = {
            sortLabel: 'Sort {name}',
            filterPlaceholder: '',
            filterLabel: 'Filter {name}',
            searchPlaceholder: 'Search',
            searchLabel: 'Search',
            noData: 'No rows found',
            pageNext: 'Next',
            pagePrevious: 'Previous',
            pageNumbers: '{page} of {pages}',
            pageInfo: '{rowStart}'.concat(String.fromCharCode(8211), '{rowEnd} of {rows} rows'),
            pageSizeOptions: 'Show {rows}',
            pageNextLabel: 'Next page',
            pagePreviousLabel: 'Previous page',
            pageNumberLabel: 'Page {page}',
            pageJumpLabel: 'Go to page',
            pageSizeOptionsLabel: 'Rows per page',
            groupExpandLabel: 'Toggle group',
            detailsExpandLabel: 'Toggle details',
            selectAllRowsLabel: 'Select all rows',
            selectAllSubRowsLabel: 'Select all rows in group',
            selectRowLabel: 'Select row',
            defaultGroupHeader: 'Grouped',
            detailsCollapseLabel: 'Toggle details',
            deselectAllRowsLabel: 'Deselect all rows',
            deselectAllSubRowsLabel: 'Deselect all rows in group',
            deselectRowLabel: 'Deselect row',
        }
        function Xn(e) {
            var t = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : {}
            if (!e || !t) return e
            var r = Object.keys(t),
                n =
                    '(' +
                    r
                        .map(function (e) {
                            return '{'.concat(e, '}')
                        })
                        .join('|') +
                    ')',
                o = e.split(new RegExp(n)),
                a = r.reduce(function (e, r) {
                    return (e['{'.concat(r, '}')] = t[r]), e
                }, {}),
                i = o.map(function (e) {
                    return null != a[e] ? a[e] : e
                })
            return i.some(function (e) {
                return 'object' === Un(e)
            })
                ? i
                : i.join('')
        }
        function Jn(e) {
            return (
                (Jn =
                    'function' == typeof Symbol && 'symbol' == typeof Symbol.iterator
                        ? function (e) {
                              return typeof e
                          }
                        : function (e) {
                              return e &&
                                  'function' == typeof Symbol &&
                                  e.constructor === Symbol &&
                                  e !== Symbol.prototype
                                  ? 'symbol'
                                  : typeof e
                          }),
                Jn(e)
            )
        }
        var qn = ['isCurrent', 'className']
        function Zn(e, t) {
            for (var r = 0; r < t.length; r++) {
                var n = t[r]
                ;(n.enumerable = n.enumerable || !1),
                    (n.configurable = !0),
                    'value' in n && (n.writable = !0),
                    Object.defineProperty(e, n.key, n)
            }
        }
        function Yn(e, t) {
            return (
                (Yn = Object.setPrototypeOf
                    ? Object.setPrototypeOf.bind()
                    : function (e, t) {
                          return (e.__proto__ = t), e
                      }),
                Yn(e, t)
            )
        }
        function Qn(e, t) {
            if (t && ('object' === Jn(t) || 'function' == typeof t)) return t
            if (void 0 !== t) throw new TypeError('Derived constructors may only return object or undefined')
            return eo(e)
        }
        function eo(e) {
            if (void 0 === e) throw new ReferenceError("this hasn't been initialised - super() hasn't been called")
            return e
        }
        function to(e) {
            return (
                (to = Object.setPrototypeOf
                    ? Object.getPrototypeOf.bind()
                    : function (e) {
                          return e.__proto__ || Object.getPrototypeOf(e)
                      }),
                to(e)
            )
        }
        function ro(e, t) {
            ;(null == t || t > e.length) && (t = e.length)
            for (var r = 0, n = new Array(t); r < t; r++) n[r] = e[r]
            return n
        }
        function no() {
            return (
                (no = Object.assign
                    ? Object.assign.bind()
                    : function (e) {
                          for (var t = 1; t < arguments.length; t++) {
                              var r = arguments[t]
                              for (var n in r) Object.prototype.hasOwnProperty.call(r, n) && (e[n] = r[n])
                          }
                          return e
                      }),
                no.apply(this, arguments)
            )
        }
        var oo = function (e) {
                var t = e.isCurrent,
                    r = e.className,
                    n = (function (e, t) {
                        if (null == e) return {}
                        var r,
                            n,
                            o = (function (e, t) {
                                if (null == e) return {}
                                var r,
                                    n,
                                    o = {},
                                    a = Object.keys(e)
                                for (n = 0; n < a.length; n++) (r = a[n]), t.indexOf(r) >= 0 || (o[r] = e[r])
                                return o
                            })(e, t)
                        if (Object.getOwnPropertySymbols) {
                            var a = Object.getOwnPropertySymbols(e)
                            for (n = 0; n < a.length; n++)
                                (r = a[n]),
                                    t.indexOf(r) >= 0 ||
                                        (Object.prototype.propertyIsEnumerable.call(e, r) && (o[r] = e[r]))
                        }
                        return o
                    })(e, qn)
                return (
                    (r = En(r, 'rt-page-button', t ? ' rt-page-button-current' : null)),
                    i().createElement('button', no({ type: 'button', className: r }, n), n.children)
                )
            },
            ao = (function (e) {
                !(function (e, t) {
                    if ('function' != typeof t && null !== t)
                        throw new TypeError('Super expression must either be null or a function')
                    ;(e.prototype = Object.create(t && t.prototype, {
                        constructor: { value: e, writable: !0, configurable: !0 },
                    })),
                        Object.defineProperty(e, 'prototype', { writable: !1 }),
                        t && Yn(e, t)
                })(u, e)
                var t,
                    r,
                    n,
                    o,
                    a,
                    l =
                        ((o = u),
                        (a = (function () {
                            if ('undefined' == typeof Reflect || !Reflect.construct) return !1
                            if (Reflect.construct.sham) return !1
                            if ('function' == typeof Proxy) return !0
                            try {
                                return (
                                    Boolean.prototype.valueOf.call(Reflect.construct(Boolean, [], function () {})), !0
                                )
                            } catch (e) {
                                return !1
                            }
                        })()),
                        function () {
                            var e,
                                t = to(o)
                            if (a) {
                                var r = to(this).constructor
                                e = Reflect.construct(t, arguments, r)
                            } else e = t.apply(this, arguments)
                            return Qn(this, e)
                        })
                function u(e) {
                    var t
                    return (
                        (function (e, t) {
                            if (!(e instanceof t)) throw new TypeError('Cannot call a class as a function')
                        })(this, u),
                        ((t = l.call(this, e)).changePage = t.changePage.bind(eo(t))),
                        (t.applyPage = t.applyPage.bind(eo(t))),
                        (t.state = { pageJumpValue: e.page + 1, prevPage: e.page }),
                        t
                    )
                }
                return (
                    (t = u),
                    (r = [
                        {
                            key: 'changePage',
                            value: function (e) {
                                e !== this.props.page + 1 && this.props.onPageChange(e - 1)
                            },
                        },
                        {
                            key: 'applyPage',
                            value: function (e) {
                                e && e.preventDefault()
                                var t = this.state.pageJumpValue
                                if ('' !== t) this.changePage(t)
                                else {
                                    var r = this.props.page + 1
                                    this.setState({ pageJumpValue: r })
                                }
                            },
                        },
                        {
                            key: 'renderPageInfo',
                            value: function (e) {
                                var t = e.page,
                                    r = e.pageSize,
                                    n = e.pageRowCount,
                                    o = e.rowCount,
                                    a = e.language,
                                    l = Math.min(t * r + 1, o),
                                    u = Math.max(Math.min(t * r + r, o), n),
                                    c = Xn(a.pageInfo, { rowStart: l, rowEnd: u, rows: o })
                                return i().createElement('div', { className: 'rt-page-info', 'aria-live': 'polite' }, c)
                            },
                        },
                        {
                            key: 'renderPageSizeOptions',
                            value: function (e) {
                                var t = e.pageSize,
                                    r = e.pageSizeOptions,
                                    n = e.onPageSizeChange,
                                    o = e.language,
                                    a = i().createElement(
                                        'select',
                                        {
                                            key: 'page-size-select',
                                            className: 'rt-page-size-select',
                                            'aria-label': o.pageSizeOptionsLabel,
                                            onChange: function (e) {
                                                return n(Number(e.target.value))
                                            },
                                            value: t,
                                        },
                                        r.map(function (e, t) {
                                            return i().createElement('option', { key: t, value: e }, e)
                                        }),
                                    ),
                                    l = Xn(o.pageSizeOptions, { rows: a })
                                return i().createElement('div', { className: 'rt-page-size' }, l)
                            },
                        },
                        {
                            key: 'renderPageJump',
                            value: function (e) {
                                var t = e.onChange,
                                    r = e.value,
                                    n = e.onBlur,
                                    o = e.onKeyPress,
                                    a = e.inputType,
                                    l = e.language
                                return i().createElement('input', {
                                    key: 'page-jump',
                                    className: 'rt-page-jump',
                                    'aria-label': l.pageJumpLabel,
                                    type: a,
                                    onChange: t,
                                    value: r,
                                    onBlur: n,
                                    onKeyPress: o,
                                })
                            },
                        },
                        {
                            key: 'getPageJumpProperties',
                            value: function () {
                                var e = this
                                return {
                                    onKeyPress: function (t) {
                                        ;(13 !== t.which && 13 !== t.keyCode) || e.applyPage()
                                    },
                                    onBlur: this.applyPage,
                                    value: this.state.pageJumpValue,
                                    onChange: function (t) {
                                        var r = t.target.value
                                        if ('' !== r) {
                                            var n = Number(r)
                                            if (!Number.isNaN(n)) {
                                                var o = Math.min(Math.max(n, 1), Math.max(e.props.pages, 1))
                                                e.setState({ pageJumpValue: o })
                                            }
                                        } else e.setState({ pageJumpValue: r })
                                    },
                                    inputType: 'number',
                                    language: this.props.language,
                                }
                            },
                        },
                        {
                            key: 'render',
                            value: function () {
                                var e,
                                    t = this,
                                    r = this.props,
                                    n = r.paginationType,
                                    o = r.showPageSizeOptions,
                                    a = r.showPageInfo,
                                    l = r.page,
                                    u = r.pages,
                                    c = r.canPrevious,
                                    s = r.canNext,
                                    f = r.theme,
                                    d = r.language,
                                    p = a ? this.renderPageInfo(this.props) : null,
                                    g = o ? this.renderPageSizeOptions(this.props) : null,
                                    y = l + 1,
                                    m = (function (e, t) {
                                        return t <= 6
                                            ? ((r = Array(t)),
                                              (function (e) {
                                                  if (Array.isArray(e)) return ro(e)
                                              })(r) ||
                                                  (function (e) {
                                                      if (
                                                          ('undefined' != typeof Symbol &&
                                                              null != e[Symbol.iterator]) ||
                                                          null != e['@@iterator']
                                                      )
                                                          return Array.from(e)
                                                  })(r) ||
                                                  (function (e, t) {
                                                      if (e) {
                                                          if ('string' == typeof e) return ro(e, t)
                                                          var r = Object.prototype.toString.call(e).slice(8, -1)
                                                          return (
                                                              'Object' === r &&
                                                                  e.constructor &&
                                                                  (r = e.constructor.name),
                                                              'Map' === r || 'Set' === r
                                                                  ? Array.from(e)
                                                                  : 'Arguments' === r ||
                                                                    /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(r)
                                                                  ? ro(e, t)
                                                                  : void 0
                                                          )
                                                      }
                                                  })(r) ||
                                                  (function () {
                                                      throw new TypeError(
                                                          'Invalid attempt to spread non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.',
                                                      )
                                                  })()).map(function (e, t) {
                                                  return t + 1
                                              })
                                            : e <= 4
                                            ? [1, 2, 3, 4, 5, t]
                                            : t - e < 3
                                            ? [1, t - 3, t - 2, t - 1, t]
                                            : [1, e - 1, e, e + 1, t]
                                        var r
                                    })(y, u)
                                if ('numbers' === n) {
                                    var h = []
                                    m.forEach(function (e, r) {
                                        var n = y === e,
                                            o = i().createElement(
                                                oo,
                                                {
                                                    key: e,
                                                    isCurrent: n,
                                                    onClick: t.changePage.bind(null, e),
                                                    'aria-label': Xn(d.pageNumberLabel, { page: e }) + (n ? ' ' : ''),
                                                    'aria-current': n ? 'page' : null,
                                                },
                                                e,
                                            )
                                        e - m[r - 1] > 1 &&
                                            h.push(
                                                i().createElement(
                                                    'span',
                                                    {
                                                        className: 'rt-page-ellipsis',
                                                        key: 'ellipsis-'.concat(e),
                                                        role: 'separator',
                                                    },
                                                    '...',
                                                ),
                                            ),
                                            h.push(o)
                                    }),
                                        (e = h)
                                } else {
                                    var b = 'jump' === n ? this.renderPageJump(this.getPageJumpProperties()) : y,
                                        v = Math.max(u, 1)
                                    e = i().createElement(
                                        'div',
                                        { className: 'rt-page-numbers' },
                                        Xn(d.pageNumbers, { page: b, pages: v }),
                                    )
                                }
                                var w = i().createElement(
                                        oo,
                                        {
                                            className: 'rt-prev-button',
                                            onClick: function () {
                                                c && t.changePage(y - 1)
                                            },
                                            disabled: !c,
                                            'aria-disabled': c ? null : 'true',
                                            'aria-label': d.pagePreviousLabel,
                                        },
                                        d.pagePrevious,
                                    ),
                                    S = i().createElement(
                                        oo,
                                        {
                                            className: 'rt-next-button',
                                            onClick: function () {
                                                s && t.changePage(y + 1)
                                            },
                                            disabled: !s,
                                            'aria-disabled': s ? null : 'true',
                                            'aria-label': d.pageNextLabel,
                                        },
                                        d.pageNext,
                                    )
                                return i().createElement(
                                    'div',
                                    { className: En('rt-pagination', $n(f.paginationStyle)) },
                                    i().createElement('div', { className: 'rt-pagination-info' }, p, g),
                                    i().createElement('div', { className: 'rt-pagination-nav' }, w, e, S),
                                )
                            },
                        },
                    ]),
                    (n = [
                        {
                            key: 'getDerivedStateFromProps',
                            value: function (e, t) {
                                return e.page !== t.prevPage ? { pageJumpValue: e.page + 1, prevPage: e.page } : null
                            },
                        },
                    ]),
                    r && Zn(t.prototype, r),
                    n && Zn(t, n),
                    Object.defineProperty(t, 'prototype', { writable: !1 }),
                    u
                )
            })(i().Component)
        function io(e) {
            return (
                (io =
                    'function' == typeof Symbol && 'symbol' == typeof Symbol.iterator
                        ? function (e) {
                              return typeof e
                          }
                        : function (e) {
                              return e &&
                                  'function' == typeof Symbol &&
                                  e.constructor === Symbol &&
                                  e !== Symbol.prototype
                                  ? 'symbol'
                                  : typeof e
                          }),
                io(e)
            )
        }
        function lo(e, t) {
            if (!(e instanceof t)) throw new TypeError('Cannot call a class as a function')
        }
        function uo(e, t) {
            for (var r = 0; r < t.length; r++) {
                var n = t[r]
                ;(n.enumerable = n.enumerable || !1),
                    (n.configurable = !0),
                    'value' in n && (n.writable = !0),
                    Object.defineProperty(e, n.key, n)
            }
        }
        function co(e, t) {
            return (
                (co = Object.setPrototypeOf
                    ? Object.setPrototypeOf.bind()
                    : function (e, t) {
                          return (e.__proto__ = t), e
                      }),
                co(e, t)
            )
        }
        function so(e, t) {
            if (t && ('object' === io(t) || 'function' == typeof t)) return t
            if (void 0 !== t) throw new TypeError('Derived constructors may only return object or undefined')
            return (function (e) {
                if (void 0 === e) throw new ReferenceError("this hasn't been initialised - super() hasn't been called")
                return e
            })(e)
        }
        function fo(e) {
            return (
                (fo = Object.setPrototypeOf
                    ? Object.getPrototypeOf.bind()
                    : function (e) {
                          return e.__proto__ || Object.getPrototypeOf(e)
                      }),
                fo(e)
            )
        }
        ao.defaultProps = {
            paginationType: 'numbers',
            pageSizeOptions: [10, 25, 50, 100],
            showPageInfo: !0,
            language: Kn,
        }
        var po = (function (e) {
            !(function (e, t) {
                if ('function' != typeof t && null !== t)
                    throw new TypeError('Super expression must either be null or a function')
                ;(e.prototype = Object.create(t && t.prototype, {
                    constructor: { value: e, writable: !0, configurable: !0 },
                })),
                    Object.defineProperty(e, 'prototype', { writable: !1 }),
                    t && co(e, t)
            })(i, e)
            var t,
                r,
                n,
                o,
                a =
                    ((n = i),
                    (o = (function () {
                        if ('undefined' == typeof Reflect || !Reflect.construct) return !1
                        if (Reflect.construct.sham) return !1
                        if ('function' == typeof Proxy) return !0
                        try {
                            return Boolean.prototype.valueOf.call(Reflect.construct(Boolean, [], function () {})), !0
                        } catch (e) {
                            return !1
                        }
                    })()),
                    function () {
                        var e,
                            t = fo(n)
                        if (o) {
                            var r = fo(this).constructor
                            e = Reflect.construct(t, arguments, r)
                        } else e = t.apply(this, arguments)
                        return so(this, e)
                    })
            function i() {
                return lo(this, i), a.apply(this, arguments)
            }
            return (
                (t = i),
                (r = [
                    {
                        key: 'componentDidMount',
                        value: function () {
                            this.staticRender()
                        },
                    },
                    {
                        key: 'staticRender',
                        value: function () {
                            window.HTMLWidgets &&
                                (i.throttled
                                    ? (i.lastCall = !0)
                                    : (window.HTMLWidgets.staticRender(),
                                      (i.throttled = !0),
                                      setTimeout(function () {
                                          i.lastCall && window.HTMLWidgets.staticRender(),
                                              (i.throttled = !1),
                                              (i.lastCall = !1)
                                      })))
                        },
                    },
                    {
                        key: 'render',
                        value: function () {
                            return Bn() ? this.props.children : null
                        },
                    },
                ]) && uo(t.prototype, r),
                Object.defineProperty(t, 'prototype', { writable: !1 }),
                i
            )
        })(i().Component)
        function go(e) {
            ;(e.getTheadProps = [yo]),
                (e.getTfootProps = [yo]),
                e.getTableBodyProps.push(yo),
                e.getRowProps.push(mo),
                e.getHeaderGroupProps.push(mo),
                e.getFooterGroupProps.push(mo),
                e.getHeaderProps.push(ho),
                e.getCellProps.push(bo),
                e.getFooterProps.push(vo),
                e.useInstance.push(wo)
        }
        go.pluginName = 'useFlexLayout'
        var yo = function (e, t) {
                return [e, { style: { minWidth: So(t.instance.totalColumnsWidth) } }]
            },
            mo = function (e, t) {
                return [e, { style: { flex: '1 0 auto', minWidth: So(t.instance.totalColumnsWidth) } }]
            },
            ho = function (e, t) {
                var r = t.column,
                    n = r.totalMaxWidth < Number.MAX_SAFE_INTEGER ? r.totalMaxWidth : null
                return [
                    e,
                    {
                        style: {
                            flex: ''.concat(r.flexWidth, ' 0 auto'),
                            minWidth: So(r.totalMinWidth),
                            width: So(r.totalWidth),
                            maxWidth: So(n),
                        },
                    },
                ]
            },
            bo = function (e, t) {
                var r = t.cell,
                    n = r.column.totalMaxWidth < Number.MAX_SAFE_INTEGER ? r.column.totalMaxWidth : null
                return [
                    e,
                    {
                        style: {
                            flex: ''.concat(r.column.flexWidth, ' 0 auto'),
                            minWidth: So(r.column.totalMinWidth),
                            width: So(r.column.totalWidth),
                            maxWidth: So(n),
                        },
                    },
                ]
            },
            vo = function (e, t) {
                var r = t.column,
                    n = r.totalMaxWidth < Number.MAX_SAFE_INTEGER ? r.totalMaxWidth : null
                return [
                    e,
                    {
                        style: {
                            flex: ''.concat(r.flexWidth, ' 0 auto'),
                            minWidth: So(r.totalMinWidth),
                            width: So(r.totalWidth),
                            maxWidth: So(n),
                        },
                    },
                ]
            }
        function wo(e) {
            var t = e.headers,
                r = e.state,
                n = e.getHooks,
                o = r.columnResizing.columnWidths
            !(function e(t) {
                var r = 0
                return (
                    t.forEach(function (t) {
                        if (t.headers) t.flexWidth = e(t.headers)
                        else if (null != o[t.id]) t.flexWidth = 0
                        else {
                            var n = t.totalMinWidth === t.totalMaxWidth
                            t.flexWidth = n ? 0 : t.totalMinWidth
                        }
                        t.isVisible && (r += t.flexWidth)
                    }),
                    r
                )
            })(t)
            var a = k(e),
                i = P(n().getTheadProps, { instance: a() }),
                l = P(n().getTfootProps, { instance: a() })
            Object.assign(e, { getTheadProps: i, getTfootProps: l })
        }
        function So(e) {
            return 'number' == typeof e ? ''.concat(e, 'px') : void 0
        }
        function Oo(e, t) {
            var r = ('undefined' != typeof Symbol && e[Symbol.iterator]) || e['@@iterator']
            if (!r) {
                if (Array.isArray(e) || (r = Ro(e)) || (t && e && 'number' == typeof e.length)) {
                    r && (e = r)
                    var n = 0,
                        o = function () {}
                    return {
                        s: o,
                        n: function () {
                            return n >= e.length ? { done: !0 } : { done: !1, value: e[n++] }
                        },
                        e: function (e) {
                            throw e
                        },
                        f: o,
                    }
                }
                throw new TypeError(
                    'Invalid attempt to iterate non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.',
                )
            }
            var a,
                i = !0,
                l = !1
            return {
                s: function () {
                    r = r.call(e)
                },
                n: function () {
                    var e = r.next()
                    return (i = e.done), e
                },
                e: function (e) {
                    ;(l = !0), (a = e)
                },
                f: function () {
                    try {
                        i || null == r.return || r.return()
                    } finally {
                        if (l) throw a
                    }
                },
            }
        }
        function Ro(e, t) {
            if (e) {
                if ('string' == typeof e) return jo(e, t)
                var r = Object.prototype.toString.call(e).slice(8, -1)
                return (
                    'Object' === r && e.constructor && (r = e.constructor.name),
                    'Map' === r || 'Set' === r
                        ? Array.from(e)
                        : 'Arguments' === r || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(r)
                        ? jo(e, t)
                        : void 0
                )
            }
        }
        function jo(e, t) {
            ;(null == t || t > e.length) && (t = e.length)
            for (var r = 0, n = new Array(t); r < t; r++) n[r] = e[r]
            return n
        }
        function Po(e) {
            e.getHeaderProps.push(Eo), e.getCellProps.push(Co), e.getFooterProps.push(Ao), e.useInstance.push(xo)
        }
        Po.pluginName = 'useStickyColumns'
        var Eo = function (e, t) {
                var r = t.column
                return r.stickyProps ? [e, r.stickyProps] : e
            },
            Co = function (e, t) {
                var r = t.cell
                return r.column.stickyProps ? [e, r.column.stickyProps] : e
            },
            Ao = function (e, t) {
                var r = t.column
                return r.stickyProps ? [e, r.stickyProps] : e
            }
        function xo(e) {
            var t = e.plugins,
                r = e.headerGroups
            A(t, ['useResizeColumns'], 'useStickyColumns'),
                r.forEach(function (e) {
                    var t = e.headers
                    t.forEach(function (e) {
                        var t,
                            r = [e]
                        e.columns &&
                            r.push.apply(
                                r,
                                (function (e) {
                                    if (Array.isArray(e)) return jo(e)
                                })((t = xn(e))) ||
                                    (function (e) {
                                        if (
                                            ('undefined' != typeof Symbol && null != e[Symbol.iterator]) ||
                                            null != e['@@iterator']
                                        )
                                            return Array.from(e)
                                    })(t) ||
                                    Ro(t) ||
                                    (function () {
                                        throw new TypeError(
                                            'Invalid attempt to spread non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.',
                                        )
                                    })(),
                            )
                        var n = r.find(function (e) {
                            return e.sticky
                        })
                        n &&
                            r.forEach(function (e) {
                                e.sticky = n.sticky
                            })
                    }),
                        t.forEach(function (e) {
                            e.sticky &&
                                (e.stickyProps = (function (e, t) {
                                    var r = { className: 'rt-sticky', style: { position: 'sticky' } }
                                    if ('left' === e.sticky) {
                                        var n = t.filter(function (e) {
                                            return 'left' === e.sticky
                                        })
                                        r.style.left = 0
                                        var o,
                                            a = Oo(n)
                                        try {
                                            for (a.s(); !(o = a.n()).done; ) {
                                                var i = o.value
                                                if (i.id === e.id) break
                                                r.style.left += i.totalWidth
                                            }
                                        } catch (e) {
                                            a.e(e)
                                        } finally {
                                            a.f()
                                        }
                                    } else if ('right' === e.sticky) {
                                        var l = t.filter(function (e) {
                                            return 'right' === e.sticky
                                        })
                                        r.style.right = 0
                                        var u,
                                            c = Oo(l.reverse())
                                        try {
                                            for (c.s(); !(u = c.n()).done; ) {
                                                var s = u.value
                                                if (s.id === e.id) break
                                                r.style.right += s.totalWidth
                                            }
                                        } catch (e) {
                                            c.e(e)
                                        } finally {
                                            c.f()
                                        }
                                    }
                                    return r
                                })(e, t))
                        })
                })
        }
        function ko(e, t) {
            return (
                (function (e) {
                    if (Array.isArray(e)) return e
                })(e) ||
                (function (e, t) {
                    var r = null == e ? null : ('undefined' != typeof Symbol && e[Symbol.iterator]) || e['@@iterator']
                    if (null != r) {
                        var n,
                            o,
                            a = [],
                            i = !0,
                            l = !1
                        try {
                            for (
                                r = r.call(e);
                                !(i = (n = r.next()).done) && (a.push(n.value), !t || a.length !== t);
                                i = !0
                            );
                        } catch (e) {
                            ;(l = !0), (o = e)
                        } finally {
                            try {
                                i || null == r.return || r.return()
                            } finally {
                                if (l) throw o
                            }
                        }
                        return a
                    }
                })(e, t) ||
                Do(e, t) ||
                (function () {
                    throw new TypeError(
                        'Invalid attempt to destructure non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.',
                    )
                })()
            )
        }
        function Io(e, t) {
            var r = Object.keys(e)
            if (Object.getOwnPropertySymbols) {
                var n = Object.getOwnPropertySymbols(e)
                t &&
                    (n = n.filter(function (t) {
                        return Object.getOwnPropertyDescriptor(e, t).enumerable
                    })),
                    r.push.apply(r, n)
            }
            return r
        }
        function No(e) {
            for (var t = 1; t < arguments.length; t++) {
                var r = null != arguments[t] ? arguments[t] : {}
                t % 2
                    ? Io(Object(r), !0).forEach(function (t) {
                          Bo(e, t, r[t])
                      })
                    : Object.getOwnPropertyDescriptors
                    ? Object.defineProperties(e, Object.getOwnPropertyDescriptors(r))
                    : Io(Object(r)).forEach(function (t) {
                          Object.defineProperty(e, t, Object.getOwnPropertyDescriptor(r, t))
                      })
            }
            return e
        }
        function Bo(e, t, r) {
            return (
                t in e
                    ? Object.defineProperty(e, t, { value: r, enumerable: !0, configurable: !0, writable: !0 })
                    : (e[t] = r),
                e
            )
        }
        function Fo(e) {
            return (
                (function (e) {
                    if (Array.isArray(e)) return Go(e)
                })(e) ||
                (function (e) {
                    if (('undefined' != typeof Symbol && null != e[Symbol.iterator]) || null != e['@@iterator'])
                        return Array.from(e)
                })(e) ||
                Do(e) ||
                (function () {
                    throw new TypeError(
                        'Invalid attempt to spread non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.',
                    )
                })()
            )
        }
        function Do(e, t) {
            if (e) {
                if ('string' == typeof e) return Go(e, t)
                var r = Object.prototype.toString.call(e).slice(8, -1)
                return (
                    'Object' === r && e.constructor && (r = e.constructor.name),
                    'Map' === r || 'Set' === r
                        ? Array.from(e)
                        : 'Arguments' === r || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(r)
                        ? Go(e, t)
                        : void 0
                )
            }
        }
        function Go(e, t) {
            ;(null == t || t > e.length) && (t = e.length)
            for (var r = 0, n = new Array(t); r < t; r++) n[r] = e[r]
            return n
        }
        var zo = {},
            Mo = [],
            To = {}
        function Wo(e) {
            ;(e.getGroupByToggleProps = [Ho]),
                e.stateReducers.push(_o),
                e.visibleColumnsDeps.push(function (e, t) {
                    var r = t.instance
                    return [].concat(Fo(e), [r.state.groupBy])
                }),
                e.visibleColumns.push(Lo),
                e.useInstance.push($o),
                e.prepareRow.push(Uo)
        }
        ;(w.resetGroupBy = 'resetGroupBy'),
            (w.setGroupBy = 'setGroupBy'),
            (w.toggleGroupBy = 'toggleGroupBy'),
            (Wo.pluginName = 'useGroupBy')
        var Ho = function (e, t) {
            var r = t.header
            return [
                e,
                {
                    onClick: r.canGroupBy
                        ? function (e) {
                              e.persist(), r.toggleGroupBy()
                          }
                        : void 0,
                    style: { cursor: r.canGroupBy ? 'pointer' : void 0 },
                    title: 'Toggle GroupBy',
                },
            ]
        }
        function _o(e, t, r, n) {
            if (t.type === w.init) return No({ groupBy: [] }, e)
            if (t.type === w.resetGroupBy) return No(No({}, e), {}, { groupBy: n.initialState.groupBy || [] })
            if (t.type === w.setGroupBy) {
                var o = t.value
                return No(No({}, e), {}, { groupBy: o })
            }
            if (t.type === w.toggleGroupBy) {
                var a = t.columnId,
                    i = t.value,
                    l = void 0 !== i ? i : !e.groupBy.includes(a)
                return No(
                    No({}, e),
                    {},
                    l
                        ? { groupBy: [].concat(Fo(e.groupBy), [a]) }
                        : {
                              groupBy: e.groupBy.filter(function (e) {
                                  return e !== a
                              }),
                          },
                )
            }
        }
        function Lo(e, t) {
            var r = t.instance.state.groupBy,
                n = r
                    .map(function (t) {
                        return e.find(function (e) {
                            return e.id === t
                        })
                    })
                    .filter(Boolean),
                o = e.filter(function (e) {
                    return !r.includes(e.id)
                })
            return (
                (e = [].concat(Fo(n), Fo(o))).forEach(function (e) {
                    ;(e.isGrouped = r.includes(e.id)), (e.groupedIndex = r.indexOf(e.id))
                }),
                e
            )
        }
        var Vo = {}
        function $o(e) {
            var t = e.data,
                r = e.rows,
                n = e.flatRows,
                o = e.rowsById,
                a = e.allColumns,
                l = e.flatHeaders,
                u = e.groupByFn,
                c = void 0 === u ? Ko : u,
                s = e.manualGroupBy,
                f = e.aggregations,
                d = void 0 === f ? Vo : f,
                p = e.plugins,
                g = e.state.groupBy,
                y = e.dispatch,
                m = e.autoResetGroupBy,
                h = void 0 === m || m,
                b = e.disableGroupBy,
                v = e.defaultCanGroupBy,
                S = e.getHooks
            A(p, ['useColumnOrder', 'useFilters'], 'useGroupBy')
            var O = k(e)
            a.forEach(function (t) {
                var r = t.accessor,
                    n = t.defaultGroupBy,
                    o = t.disableGroupBy
                ;(t.canGroupBy = r
                    ? Cn(t.canGroupBy, !0 !== o && void 0, !0 !== b && void 0, !0)
                    : Cn(t.canGroupBy, n, v, !1)),
                    t.canGroupBy &&
                        (t.toggleGroupBy = function () {
                            return e.toggleGroupBy(t.id)
                        }),
                    (t.Aggregated = t.Aggregated || t.Cell)
            })
            var R = i().useCallback(
                    function (e, t) {
                        y({ type: w.toggleGroupBy, columnId: e, value: t })
                    },
                    [y],
                ),
                j = i().useCallback(
                    function (e) {
                        y({ type: w.setGroupBy, value: e })
                    },
                    [y],
                )
            l.forEach(function (e) {
                e.getGroupByToggleProps = P(S().getGroupByToggleProps, { instance: O(), header: e })
            })
            var E = i().useMemo(
                    function () {
                        if (s || !g.length) return [r, n, o, Mo, To, n, o]
                        var e = g.filter(function (e) {
                                return a.find(function (t) {
                                    return t.id === e
                                })
                            }),
                            t = function (e, t, r, n) {
                                var o = {}
                                return (
                                    a.forEach(function (a) {
                                        if (n.includes(a.id)) {
                                            var i =
                                                'function' == typeof a.aggregate
                                                    ? a.aggregate
                                                    : d[a.aggregate] || zo[a.aggregate]
                                            if (i) {
                                                var l = e.map(function (e) {
                                                    var t = e.values[a.id]
                                                    if (!r && a.aggregateValue) {
                                                        var n =
                                                            'function' == typeof a.aggregateValue
                                                                ? a.aggregateValue
                                                                : d[a.aggregateValue] || zo[a.aggregateValue]
                                                        if (!n)
                                                            throw (
                                                                (console.info({ column: a }),
                                                                new Error(
                                                                    'React Table: Invalid column.aggregateValue option for column listed above',
                                                                ))
                                                            )
                                                        t = n(t, e, a)
                                                    }
                                                    return t
                                                })
                                                o[a.id] = i(
                                                    l,
                                                    e.map(function (e) {
                                                        return e.values
                                                    }),
                                                    t.map(function (e) {
                                                        return e.values
                                                    }),
                                                )
                                            } else {
                                                if (a.aggregate)
                                                    throw (
                                                        (console.info({ column: a }),
                                                        new Error(
                                                            'React Table: Invalid column.aggregate option for column listed above',
                                                        ))
                                                    )
                                                o[a.id] = null
                                            }
                                        } else o[a.id] = t[0] ? t[0].values[a.id] : null
                                    }),
                                    o
                                )
                            },
                            i = [],
                            l = {},
                            u = [],
                            f = {},
                            p = [],
                            y = {},
                            m = (function r(n) {
                                var o = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : 0,
                                    s = arguments.length > 2 ? arguments[2] : void 0
                                if (o === e.length)
                                    return (
                                        n.forEach(function (e) {
                                            e.depth = o
                                        }),
                                        n
                                    )
                                var d = e[o],
                                    g = c(n, d),
                                    m = Object.entries(g).map(function (n, c) {
                                        var g = ko(n, 2),
                                            m = g[0],
                                            h = g[1],
                                            b = ''.concat(d, ':').concat(m)
                                        b = s ? ''.concat(s, '>').concat(b) : b
                                        var v = r(h, o + 1, b),
                                            w = o ? Xo(h, 'leafRows') : h,
                                            S = e.slice(0, o + 1),
                                            O = a
                                                .filter(function (e) {
                                                    return !S.includes(e.id)
                                                })
                                                .map(function (e) {
                                                    return e.id
                                                }),
                                            R = t(w, v, o, O),
                                            j = {
                                                id: b,
                                                isGrouped: !0,
                                                groupByID: d,
                                                groupByVal: m,
                                                values: R,
                                                subRows: v,
                                                leafRows: w,
                                                depth: o,
                                                index: void 0,
                                                groupIndex: c,
                                                aggregatedColumns: O,
                                            }
                                        return (
                                            v.forEach(function (e) {
                                                i.push(e),
                                                    (l[e.id] = e),
                                                    e.isGrouped
                                                        ? (u.push(e), (f[e.id] = e))
                                                        : (p.push(e), (y[e.id] = e))
                                            }),
                                            j
                                        )
                                    })
                                return m
                            })(r)
                        return (
                            m.forEach(function (e) {
                                i.push(e),
                                    (l[e.id] = e),
                                    e.isGrouped ? (u.push(e), (f[e.id] = e)) : (p.push(e), (y[e.id] = e))
                            }),
                            [m, i, l, u, f, p, y]
                        )
                    },
                    [s, g, r, n, o, a, d, c],
                ),
                C = ko(E, 7),
                x = C[0],
                I = C[1],
                B = C[2],
                F = C[3],
                D = C[4],
                G = C[5],
                z = C[6],
                M = k(h)
            N(
                function () {
                    M() && y({ type: w.resetGroupBy })
                },
                [y, s ? null : t],
            ),
                Object.assign(e, {
                    preGroupedRows: r,
                    preGroupedFlatRow: n,
                    preGroupedRowsById: o,
                    groupedRows: x,
                    groupedFlatRows: I,
                    groupedRowsById: B,
                    onlyGroupedFlatRows: F,
                    onlyGroupedRowsById: D,
                    nonGroupedFlatRows: G,
                    nonGroupedRowsById: z,
                    rows: x,
                    flatRows: I,
                    rowsById: B,
                    toggleGroupBy: R,
                    setGroupBy: j,
                })
        }
        function Uo(e) {
            e.allCells.forEach(function (t) {
                var r, n
                ;(t.isGrouped = t.column.isGrouped && t.column.id === e.groupByID),
                    (t.isAggregated =
                        !t.isGrouped &&
                        (null === (r = e.aggregatedColumns) || void 0 === r ? void 0 : r.includes(t.column.id)) &&
                        (null === (n = e.subRows) || void 0 === n ? void 0 : n.length)),
                    (t.isPlaceholder = !t.isGrouped && t.column.isGrouped && !t.isAggregated)
            })
        }
        function Ko(e, t) {
            return e.reduce(function (e, r) {
                var n = ''.concat(r.values[t])
                return (e[n] = Array.isArray(e[n]) ? e[n] : []), e[n].push(r), e
            }, {})
        }
        function Xo(e, t) {
            var r = []
            return (
                (function e(n) {
                    n.forEach(function (n) {
                        n[t] ? e(n[t]) : r.push(n)
                    })
                })(e),
                r
            )
        }
        function Jo(e, t) {
            var r = Object.keys(e)
            if (Object.getOwnPropertySymbols) {
                var n = Object.getOwnPropertySymbols(e)
                t &&
                    (n = n.filter(function (t) {
                        return Object.getOwnPropertyDescriptor(e, t).enumerable
                    })),
                    r.push.apply(r, n)
            }
            return r
        }
        function qo(e) {
            for (var t = 1; t < arguments.length; t++) {
                var r = null != arguments[t] ? arguments[t] : {}
                t % 2
                    ? Jo(Object(r), !0).forEach(function (t) {
                          Zo(e, t, r[t])
                      })
                    : Object.getOwnPropertyDescriptors
                    ? Object.defineProperties(e, Object.getOwnPropertyDescriptors(r))
                    : Jo(Object(r)).forEach(function (t) {
                          Object.defineProperty(e, t, Object.getOwnPropertyDescriptor(r, t))
                      })
            }
            return e
        }
        function Zo(e, t, r) {
            return (
                t in e
                    ? Object.defineProperty(e, t, { value: r, enumerable: !0, configurable: !0, writable: !0 })
                    : (e[t] = r),
                e
            )
        }
        function Yo(e, t) {
            return (
                (function (e) {
                    if (Array.isArray(e)) return e
                })(e) ||
                (function (e, t) {
                    var r = null == e ? null : ('undefined' != typeof Symbol && e[Symbol.iterator]) || e['@@iterator']
                    if (null != r) {
                        var n,
                            o,
                            a = [],
                            i = !0,
                            l = !1
                        try {
                            for (
                                r = r.call(e);
                                !(i = (n = r.next()).done) && (a.push(n.value), !t || a.length !== t);
                                i = !0
                            );
                        } catch (e) {
                            ;(l = !0), (o = e)
                        } finally {
                            try {
                                i || null == r.return || r.return()
                            } finally {
                                if (l) throw o
                            }
                        }
                        return a
                    }
                })(e, t) ||
                (function (e, t) {
                    if (e) {
                        if ('string' == typeof e) return Qo(e, t)
                        var r = Object.prototype.toString.call(e).slice(8, -1)
                        return (
                            'Object' === r && e.constructor && (r = e.constructor.name),
                            'Map' === r || 'Set' === r
                                ? Array.from(e)
                                : 'Arguments' === r || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(r)
                                ? Qo(e, t)
                                : void 0
                        )
                    }
                })(e, t) ||
                (function () {
                    throw new TypeError(
                        'Invalid attempt to destructure non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.',
                    )
                })()
            )
        }
        function Qo(e, t) {
            ;(null == t || t > e.length) && (t = e.length)
            for (var r = 0, n = new Array(t); r < t; r++) n[r] = e[r]
            return n
        }
        var ea = null
        function ta(e) {
            ;(e.getResizerProps = [ra]),
                e.getHeaderProps.push({ style: { position: 'relative' } }),
                e.stateReducers.push(na),
                e.useInstance.push(aa),
                e.useInstanceBeforeDimensions.push(oa)
        }
        ;(O.canResize = !0),
            (w.columnStartResizing = 'columnStartResizing'),
            (w.columnResizing = 'columnResizing'),
            (w.columnDoneResizing = 'columnDoneResizing'),
            (w.resetResize = 'resetResize')
        var ra = function (e, t) {
            var r = t.instance,
                n = t.header,
                o = r.dispatch,
                a = function (e, t) {
                    var r = !1
                    if ('touchstart' === e.type) {
                        if (e.touches && e.touches.length > 1) return
                        r = !0
                    }
                    var n,
                        a,
                        i = (function (e) {
                            var t = []
                            return (
                                (function e(r) {
                                    r.columns && r.columns.length && r.columns.forEach(e), t.push(r)
                                })(e),
                                t
                            )
                        })(t),
                        l = i.map(function (e) {
                            return [e.id, e.getDOMWidth()]
                        }),
                        u = l.find(function (e) {
                            return Yo(e, 1)[0] === t.id
                        })[1],
                        c = r ? Math.round(e.touches[0].clientX) : e.clientX,
                        s = function () {
                            window.cancelAnimationFrame(n), (n = null), o({ type: w.columnResizing, clientX: a })
                        },
                        f = function () {
                            window.cancelAnimationFrame(n), (n = null), o({ type: w.columnDoneResizing })
                        },
                        d = function (e) {
                            ;(a = e), n || (n = window.requestAnimationFrame(s))
                        },
                        p = {
                            mouse: {
                                moveEvent: 'mousemove',
                                moveHandler: function (e) {
                                    return d(e.clientX)
                                },
                                upEvent: 'mouseup',
                                upHandler: function () {
                                    document.removeEventListener('mousemove', p.mouse.moveHandler),
                                        document.removeEventListener('mouseup', p.mouse.upHandler),
                                        f()
                                },
                            },
                            touch: {
                                moveEvent: 'touchmove',
                                moveHandler: function (e) {
                                    return (
                                        e.cancelable && (e.preventDefault(), e.stopPropagation()),
                                        d(e.touches[0].clientX),
                                        !1
                                    )
                                },
                                upEvent: 'touchend',
                                upHandler: function () {
                                    document.removeEventListener(p.touch.moveEvent, p.touch.moveHandler),
                                        document.removeEventListener(p.touch.upEvent, p.touch.upHandler),
                                        f()
                                },
                            },
                        },
                        g = r ? p.touch : p.mouse,
                        y = !!(function () {
                            if ('boolean' == typeof ea) return ea
                            var e = !1
                            try {
                                var t = {
                                    get passive() {
                                        return (e = !0), !1
                                    },
                                }
                                window.addEventListener('test', null, t), window.removeEventListener('test', null, t)
                            } catch (t) {
                                e = !1
                            }
                            return (ea = e)
                        })() && { passive: !1 }
                    document.addEventListener(g.moveEvent, g.moveHandler, y),
                        document.addEventListener(g.upEvent, g.upHandler, y),
                        o({
                            type: w.columnStartResizing,
                            columnId: t.id,
                            columnWidth: u,
                            headerIdWidths: l,
                            clientX: c,
                        })
                }
            return [
                e,
                {
                    onMouseDown: function (e) {
                        return e.persist() || a(e, n)
                    },
                    onTouchStart: function (e) {
                        return e.persist() || a(e, n)
                    },
                    style: { cursor: 'col-resize' },
                    draggable: !1,
                    role: 'separator',
                },
            ]
        }
        function na(e, t) {
            if (t.type === w.init) return qo({ columnResizing: { columnWidths: {} } }, e)
            if (t.type === w.resetResize) return qo(qo({}, e), {}, { columnResizing: { columnWidths: {} } })
            if (t.type === w.columnStartResizing) {
                var r = t.clientX,
                    n = t.columnId,
                    o = t.columnWidth,
                    a = t.headerIdWidths
                return qo(
                    qo({}, e),
                    {},
                    {
                        columnResizing: qo(
                            qo({}, e.columnResizing),
                            {},
                            { startX: r, headerIdWidths: a, columnWidth: o, isResizingColumn: n },
                        ),
                    },
                )
            }
            if (t.type === w.columnResizing) {
                var i = t.clientX,
                    l = e.columnResizing,
                    u = l.startX,
                    c = l.columnWidth,
                    s = l.headerIdWidths,
                    f = (i - u) / c,
                    d = {}
                return (
                    (void 0 === s ? [] : s).forEach(function (e) {
                        var t = Yo(e, 2),
                            r = t[0],
                            n = t[1]
                        d[r] = Math.max(n + n * f, 0)
                    }),
                    qo(
                        qo({}, e),
                        {},
                        {
                            columnResizing: qo(
                                qo({}, e.columnResizing),
                                {},
                                { columnWidths: qo(qo({}, e.columnResizing.columnWidths), d) },
                            ),
                        },
                    )
                )
            }
            return t.type === w.columnDoneResizing
                ? qo(
                      qo({}, e),
                      {},
                      { columnResizing: qo(qo({}, e.columnResizing), {}, { startX: null, isResizingColumn: null }) },
                  )
                : void 0
        }
        ta.pluginName = 'useResizeColumns'
        var oa = function (e) {
            var t = e.flatHeaders,
                r = e.disableResizing,
                n = e.getHooks,
                o = e.state.columnResizing,
                a = k(e)
            t.forEach(function (e) {
                var t = Cn(!0 !== e.disableResizing && void 0, !0 !== r && void 0, !0)
                ;(e.canResize = t),
                    (e.width = Cn(o.columnWidths[e.id], e.originalWidth, e.width)),
                    (e.isResizing = o.isResizingColumn === e.id),
                    t && (e.getResizerProps = P(n().getResizerProps, { instance: a(), header: e }))
            })
        }
        function aa(e) {
            var t = e.plugins,
                r = e.dispatch,
                n = e.autoResetResize,
                o = void 0 === n || n,
                a = e.columns
            A(t, ['useAbsoluteLayout'], 'useResizeColumns')
            var l = k(o)
            N(
                function () {
                    l() && r({ type: w.resetResize })
                },
                [a],
            )
            var u = i().useCallback(
                function () {
                    return r({ type: w.resetResize })
                },
                [r],
            )
            Object.assign(e, { resetResizing: u })
        }
        function ia(e, t) {
            var r = Object.keys(e)
            if (Object.getOwnPropertySymbols) {
                var n = Object.getOwnPropertySymbols(e)
                t &&
                    (n = n.filter(function (t) {
                        return Object.getOwnPropertyDescriptor(e, t).enumerable
                    })),
                    r.push.apply(r, n)
            }
            return r
        }
        function la(e) {
            for (var t = 1; t < arguments.length; t++) {
                var r = null != arguments[t] ? arguments[t] : {}
                t % 2
                    ? ia(Object(r), !0).forEach(function (t) {
                          ua(e, t, r[t])
                      })
                    : Object.getOwnPropertyDescriptors
                    ? Object.defineProperties(e, Object.getOwnPropertyDescriptors(r))
                    : ia(Object(r)).forEach(function (t) {
                          Object.defineProperty(e, t, Object.getOwnPropertyDescriptor(r, t))
                      })
            }
            return e
        }
        function ua(e, t, r) {
            return (
                t in e
                    ? Object.defineProperty(e, t, { value: r, enumerable: !0, configurable: !0, writable: !0 })
                    : (e[t] = r),
                e
            )
        }
        function ca(e) {
            ;(e.getToggleRowSelectedProps = [sa]),
                (e.getToggleAllRowsSelectedProps = [fa]),
                (e.getToggleAllPageRowsSelectedProps = [da]),
                e.stateReducers.push(pa),
                e.useInstance.push(ga),
                e.prepareRow.push(ya)
        }
        ;(w.resetSelectedRows = 'resetSelectedRows'),
            (w.toggleAllRowsSelected = 'toggleAllRowsSelected'),
            (w.toggleRowSelected = 'toggleRowSelected'),
            (w.toggleAllPageRowsSelected = 'toggleAllPageRowsSelected'),
            (w.setRowsSelected = 'setRowsSelected'),
            (ca.pluginName = 'useRowSelect')
        var sa = function (e, t) {
                var r = t.instance,
                    n = t.row,
                    o = r.manualRowSelectedKey,
                    a = void 0 === o ? 'isSelected' : o
                return [
                    e,
                    {
                        onChange: function (e) {
                            n.toggleRowSelected(e.target.checked)
                        },
                        style: { cursor: 'pointer' },
                        checked: !(!n.original || !n.original[a]) || n.isSelected,
                        title: 'Toggle Row Selected',
                        indeterminate: n.isSomeSelected,
                    },
                ]
            },
            fa = function (e, t) {
                var r = t.instance
                return [
                    e,
                    {
                        onChange: function (e) {
                            r.toggleAllRowsSelected(e.target.checked)
                        },
                        style: { cursor: 'pointer' },
                        checked: r.isAllRowsSelected,
                        title: 'Toggle All Rows Selected',
                        indeterminate: Boolean(!r.isAllRowsSelected && Object.keys(r.state.selectedRowIds).length),
                    },
                ]
            },
            da = function (e, t) {
                var r = t.instance
                return [
                    e,
                    {
                        onChange: function (e) {
                            r.toggleAllPageRowsSelected(e.target.checked)
                        },
                        style: { cursor: 'pointer' },
                        checked: r.isAllPageRowsSelected,
                        title: 'Toggle All Current Page Rows Selected',
                        indeterminate: Boolean(
                            !r.isAllPageRowsSelected &&
                                r.page.some(function (e) {
                                    var t = e.id
                                    return r.state.selectedRowIds[t]
                                }),
                        ),
                    },
                ]
            }
        function pa(e, t, r, n) {
            if (t.type === w.init) return la({ selectedRowIds: {} }, e)
            if (t.type === w.resetSelectedRows)
                return la(la({}, e), {}, { selectedRowIds: n.initialState.selectedRowIds || {} })
            if (t.type === w.toggleAllRowsSelected) {
                var o = t.value,
                    a = n.isAllRowsSelected,
                    i = n.rowsById,
                    l = n.nonGroupedRowsById,
                    u = void 0 === l ? i : l,
                    c = void 0 !== o ? o : !a,
                    s = Object.assign({}, e.selectedRowIds)
                return (
                    c
                        ? Object.keys(u).forEach(function (e) {
                              s[e] = !0
                          })
                        : Object.keys(u).forEach(function (e) {
                              delete s[e]
                          }),
                    la(la({}, e), {}, { selectedRowIds: s })
                )
            }
            if (t.type === w.toggleRowSelected) {
                var f = t.id,
                    d = t.value,
                    p = n.rowsById,
                    g = n.selectSubRows,
                    y = void 0 === g || g,
                    m = e.selectedRowIds[f],
                    h = void 0 !== d ? d : !m
                if (m === h) return e
                var b = la({}, e.selectedRowIds)
                return (
                    (function e(t) {
                        var r = p[t]
                        if ((r.isGrouped || (h ? (b[t] = !0) : delete b[t]), y && r.subRows))
                            return r.subRows.forEach(function (t) {
                                return e(t.id)
                            })
                    })(f),
                    la(la({}, e), {}, { selectedRowIds: b })
                )
            }
            if (t.type === w.toggleAllPageRowsSelected) {
                var v = t.value,
                    S = n.page,
                    O = n.rowsById,
                    R = n.selectSubRows,
                    j = void 0 === R || R,
                    P = n.isAllPageRowsSelected,
                    E = void 0 !== v ? v : !P,
                    C = la({}, e.selectedRowIds),
                    A = function e(t) {
                        var r = O[t]
                        if ((r.isGrouped || (E ? (C[t] = !0) : delete C[t]), j && r.subRows))
                            return r.subRows.forEach(function (t) {
                                return e(t.id)
                            })
                    }
                return (
                    S.forEach(function (e) {
                        return A(e.id)
                    }),
                    la(la({}, e), {}, { selectedRowIds: C })
                )
            }
            if (t.type === w.setRowsSelected) {
                var x = t.ids,
                    k = n.rowsById,
                    I = n.selectSubRows,
                    N = void 0 === I || I,
                    B = {},
                    F = function e(t) {
                        var r = k[t]
                        if (r)
                            return (
                                r.isGrouped || (B[t] = !0),
                                N && r.subRows
                                    ? r.subRows.forEach(function (t) {
                                          return e(t.id)
                                      })
                                    : void 0
                            )
                        B[t] = !0
                    }
                return (
                    x.forEach(function (e) {
                        return F(e)
                    }),
                    la(la({}, e), {}, { selectedRowIds: B })
                )
            }
            return e
        }
        function ga(e) {
            var t = e.data,
                r = e.rows,
                n = e.getHooks,
                o = e.plugins,
                a = e.rowsById,
                l = e.nonGroupedRowsById,
                u = void 0 === l ? a : l,
                c = e.autoResetSelectedRows,
                s = void 0 === c || c,
                f = e.state.selectedRowIds,
                d = e.selectSubRows,
                p = void 0 === d || d,
                g = e.dispatch,
                y = e.page
            A(o, ['useFilters', 'useGroupBy', 'useSortBy', 'useExpanded', 'usePagination'], 'useRowSelect')
            var m = i().useMemo(
                    function () {
                        var e = [],
                            t = function t(r) {
                                var n = p ? ma(r, f) : !!f[r.id]
                                ;(r.isSelected = !!n),
                                    (r.isSomeSelected = null === n),
                                    n && e.push(r),
                                    r.subRows &&
                                        r.subRows.length &&
                                        r.subRows.forEach(function (e) {
                                            return t(e)
                                        })
                            }
                        return (
                            r.forEach(function (e) {
                                return t(e)
                            }),
                            e
                        )
                    },
                    [r, p, f],
                ),
                h = Boolean(Object.keys(u).length && Object.keys(f).length),
                b = h
            h &&
                Object.keys(u).some(function (e) {
                    return !f[e]
                }) &&
                (h = !1),
                h ||
                    (y &&
                        y.length &&
                        y.some(function (e) {
                            var t = e.id
                            return !f[t]
                        }) &&
                        (b = !1))
            var v = k(s)
            N(
                function () {
                    v() && g({ type: w.resetSelectedRows })
                },
                [g, t],
            )
            var S = i().useCallback(
                    function (e) {
                        return g({ type: w.toggleAllRowsSelected, value: e })
                    },
                    [g],
                ),
                O = i().useCallback(
                    function (e) {
                        return g({ type: w.toggleAllPageRowsSelected, value: e })
                    },
                    [g],
                ),
                R = i().useCallback(
                    function (e, t) {
                        return g({ type: w.toggleRowSelected, id: e, value: t })
                    },
                    [g],
                ),
                j = i().useCallback(
                    function (e) {
                        return g({ type: w.setRowsSelected, ids: e })
                    },
                    [g],
                ),
                E = k(e),
                C = P(n().getToggleAllRowsSelectedProps, { instance: E() }),
                x = P(n().getToggleAllPageRowsSelectedProps, { instance: E() })
            Object.assign(e, {
                selectedFlatRows: m,
                isAllRowsSelected: h,
                isAllPageRowsSelected: b,
                toggleRowSelected: R,
                toggleAllRowsSelected: S,
                setRowsSelected: j,
                getToggleAllRowsSelectedProps: C,
                getToggleAllPageRowsSelectedProps: x,
                toggleAllPageRowsSelected: O,
            })
        }
        function ya(e, t) {
            var r = t.instance
            ;(e.toggleRowSelected = function (t) {
                return r.toggleRowSelected(e.id, t)
            }),
                (e.getToggleRowSelectedProps = P(r.getHooks().getToggleRowSelectedProps, { instance: r, row: e }))
        }
        function ma(e, t) {
            if (t[e.id]) return !0
            var r = e.subRows
            if (r && r.length) {
                var n = !0,
                    o = !1
                return (
                    r.forEach(function (e) {
                        ;(o && !n) || (ma(e, t) ? (o = !0) : (n = !1))
                    }),
                    !!n || (!!o && null)
                )
            }
            return !1
        }
        function ha(e, t) {
            if (e) {
                if ('string' == typeof e) return ba(e, t)
                var r = Object.prototype.toString.call(e).slice(8, -1)
                return (
                    'Object' === r && e.constructor && (r = e.constructor.name),
                    'Map' === r || 'Set' === r
                        ? Array.from(e)
                        : 'Arguments' === r || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(r)
                        ? ba(e, t)
                        : void 0
                )
            }
        }
        function ba(e, t) {
            ;(null == t || t > e.length) && (t = e.length)
            for (var r = 0, n = new Array(t); r < t; r++) n[r] = e[r]
            return n
        }
        function va(e, t) {
            var r = Object.keys(e)
            if (Object.getOwnPropertySymbols) {
                var n = Object.getOwnPropertySymbols(e)
                t &&
                    (n = n.filter(function (t) {
                        return Object.getOwnPropertyDescriptor(e, t).enumerable
                    })),
                    r.push.apply(r, n)
            }
            return r
        }
        function wa(e) {
            for (var t = 1; t < arguments.length; t++) {
                var r = null != arguments[t] ? arguments[t] : {}
                t % 2
                    ? va(Object(r), !0).forEach(function (t) {
                          Sa(e, t, r[t])
                      })
                    : Object.getOwnPropertyDescriptors
                    ? Object.defineProperties(e, Object.getOwnPropertyDescriptors(r))
                    : va(Object(r)).forEach(function (t) {
                          Object.defineProperty(e, t, Object.getOwnPropertyDescriptor(r, t))
                      })
            }
            return e
        }
        function Sa(e, t, r) {
            return (
                t in e
                    ? Object.defineProperty(e, t, { value: r, enumerable: !0, configurable: !0, writable: !0 })
                    : (e[t] = r),
                e
            )
        }
        function Oa(e) {
            e.stateReducers.push(Ra), e.useInstance.push(ja)
        }
        function Ra(e, t, r, n) {
            if (t.type === w.init) return wa({ pageSize: 10, pageIndex: 0 }, e)
            if (t.type === w.resetPage) return wa(wa({}, e), {}, { pageIndex: n.initialState.pageIndex || 0 })
            if (t.type === w.gotoPage) {
                var o = n.pageCount,
                    a = n.page,
                    i = x(t.pageIndex, e.pageIndex),
                    l = !1
                return (
                    i > e.pageIndex ? (l = -1 === o ? a.length >= e.pageSize : i < o) : i < e.pageIndex && (l = i > -1),
                    l ? wa(wa({}, e), {}, { pageIndex: i }) : e
                )
            }
            if (t.type === w.setPageSize) {
                var u = t.pageSize,
                    c = e.pageSize * e.pageIndex,
                    s = Math.floor(c / u)
                return wa(wa({}, e), {}, { pageIndex: s, pageSize: u })
            }
        }
        function ja(e) {
            var t = e.rows,
                r = e.autoResetPage,
                n = void 0 === r || r,
                o = e.manualExpandedKey,
                a = void 0 === o ? 'expanded' : o,
                l = e.plugins,
                u = e.pageCount,
                c = e.paginateExpandedRows,
                s = void 0 === c || c,
                f = e.expandSubRows,
                d = void 0 === f || f,
                p = e.disablePagination,
                g = e.state,
                y = g.pageIndex,
                m = g.expanded,
                h = g.globalFilter,
                b = g.filters,
                v = g.groupBy,
                S = g.sortBy,
                O = e.dispatch,
                R = e.data,
                j = e.manualPagination
            A(l, ['useGlobalFilter', 'useFilters', 'useGroupBy', 'useSortBy', 'useExpanded'], 'usePagination')
            var P = k(n)
            N(
                function () {
                    P() && O({ type: w.resetPage })
                },
                [O, j ? null : R, h, b, v, S],
            )
            var E = p ? t.length : e.state.pageSize,
                C = j ? u : Math.ceil(t.length / E),
                x = i().useMemo(
                    function () {
                        return C > 0
                            ? ((e = new Array(C)),
                              (function (e) {
                                  if (Array.isArray(e)) return ba(e)
                              })(e) ||
                                  (function (e) {
                                      if (
                                          ('undefined' != typeof Symbol && null != e[Symbol.iterator]) ||
                                          null != e['@@iterator']
                                      )
                                          return Array.from(e)
                                  })(e) ||
                                  ha(e) ||
                                  (function () {
                                      throw new TypeError(
                                          'Invalid attempt to spread non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.',
                                      )
                                  })())
                                  .fill(null)
                                  .map(function (e, t) {
                                      return t
                                  })
                            : []
                        var e
                    },
                    [C],
                ),
                I = i().useMemo(
                    function () {
                        var e
                        if (j) e = t
                        else {
                            var r = E * y,
                                n = r + E
                            e = t.slice(r, n)
                        }
                        var o = e.length
                        return s ? [e, o] : [Pa(e, { manualExpandedKey: a, expanded: m, expandSubRows: d }), o]
                    },
                    [d, m, a, j, y, E, s, t],
                ),
                B = (function (e, t) {
                    return (
                        (function (e) {
                            if (Array.isArray(e)) return e
                        })(e) ||
                        (function (e, t) {
                            var r =
                                null == e
                                    ? null
                                    : ('undefined' != typeof Symbol && e[Symbol.iterator]) || e['@@iterator']
                            if (null != r) {
                                var n,
                                    o,
                                    a = [],
                                    i = !0,
                                    l = !1
                                try {
                                    for (
                                        r = r.call(e);
                                        !(i = (n = r.next()).done) && (a.push(n.value), !t || a.length !== t);
                                        i = !0
                                    );
                                } catch (e) {
                                    ;(l = !0), (o = e)
                                } finally {
                                    try {
                                        i || null == r.return || r.return()
                                    } finally {
                                        if (l) throw o
                                    }
                                }
                                return a
                            }
                        })(e, t) ||
                        ha(e, t) ||
                        (function () {
                            throw new TypeError(
                                'Invalid attempt to destructure non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.',
                            )
                        })()
                    )
                })(I, 2),
                F = B[0],
                D = B[1],
                G = y > 0,
                z = -1 === C ? F.length >= E : y < C - 1,
                M = i().useCallback(
                    function (e) {
                        O({ type: w.gotoPage, pageIndex: e })
                    },
                    [O],
                ),
                T = i().useCallback(
                    function () {
                        return M(function (e) {
                            return e - 1
                        })
                    },
                    [M],
                ),
                W = i().useCallback(
                    function () {
                        return M(function (e) {
                            return e + 1
                        })
                    },
                    [M],
                ),
                H = i().useCallback(
                    function (e) {
                        O({ type: w.setPageSize, pageSize: e })
                    },
                    [O],
                )
            Object.assign(e, {
                pageOptions: x,
                pageCount: C,
                page: F,
                pageRowCount: D,
                canPreviousPage: G,
                canNextPage: z,
                gotoPage: M,
                previousPage: T,
                nextPage: W,
                setPageSize: H,
            })
        }
        function Pa(e, t) {
            var r = t.manualExpandedKey,
                n = t.expanded,
                o = t.expandSubRows,
                a = void 0 === o || o,
                i = [],
                l = function e(t) {
                    var o = !(arguments.length > 1 && void 0 !== arguments[1]) || arguments[1]
                    ;(t.isExpanded = (t.original && t.original[r]) || n[t.id]),
                        (t.canExpand = t.subRows && !!t.subRows.length),
                        o && i.push(t),
                        t.subRows &&
                            t.subRows.length &&
                            t.isExpanded &&
                            t.subRows.forEach(function (t) {
                                return e(t, a)
                            })
                }
            return (
                e.forEach(function (e) {
                    return l(e)
                }),
                i
            )
        }
        function Ea(e, t) {
            var r = Object.keys(e)
            if (Object.getOwnPropertySymbols) {
                var n = Object.getOwnPropertySymbols(e)
                t &&
                    (n = n.filter(function (t) {
                        return Object.getOwnPropertyDescriptor(e, t).enumerable
                    })),
                    r.push.apply(r, n)
            }
            return r
        }
        function Ca(e) {
            for (var t = 1; t < arguments.length; t++) {
                var r = null != arguments[t] ? arguments[t] : {}
                t % 2
                    ? Ea(Object(r), !0).forEach(function (t) {
                          Aa(e, t, r[t])
                      })
                    : Object.getOwnPropertyDescriptors
                    ? Object.defineProperties(e, Object.getOwnPropertyDescriptors(r))
                    : Ea(Object(r)).forEach(function (t) {
                          Object.defineProperty(e, t, Object.getOwnPropertyDescriptor(r, t))
                      })
            }
            return e
        }
        function Aa(e, t, r) {
            return (
                t in e
                    ? Object.defineProperty(e, t, { value: r, enumerable: !0, configurable: !0, writable: !0 })
                    : (e[t] = r),
                e
            )
        }
        function xa(e) {
            return (
                (xa =
                    'function' == typeof Symbol && 'symbol' == typeof Symbol.iterator
                        ? function (e) {
                              return typeof e
                          }
                        : function (e) {
                              return e &&
                                  'function' == typeof Symbol &&
                                  e.constructor === Symbol &&
                                  e !== Symbol.prototype
                                  ? 'symbol'
                                  : typeof e
                          }),
                xa(e)
            )
        }
        function ka(e, t) {
            return (
                (function (e) {
                    if (Array.isArray(e)) return e
                })(e) ||
                (function (e, t) {
                    var r = null == e ? null : ('undefined' != typeof Symbol && e[Symbol.iterator]) || e['@@iterator']
                    if (null != r) {
                        var n,
                            o,
                            a = [],
                            i = !0,
                            l = !1
                        try {
                            for (
                                r = r.call(e);
                                !(i = (n = r.next()).done) && (a.push(n.value), !t || a.length !== t);
                                i = !0
                            );
                        } catch (e) {
                            ;(l = !0), (o = e)
                        } finally {
                            try {
                                i || null == r.return || r.return()
                            } finally {
                                if (l) throw o
                            }
                        }
                        return a
                    }
                })(e, t) ||
                (function (e, t) {
                    if (e) {
                        if ('string' == typeof e) return Ia(e, t)
                        var r = Object.prototype.toString.call(e).slice(8, -1)
                        return (
                            'Object' === r && e.constructor && (r = e.constructor.name),
                            'Map' === r || 'Set' === r
                                ? Array.from(e)
                                : 'Arguments' === r || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(r)
                                ? Ia(e, t)
                                : void 0
                        )
                    }
                })(e, t) ||
                (function () {
                    throw new TypeError(
                        'Invalid attempt to destructure non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.',
                    )
                })()
            )
        }
        function Ia(e, t) {
            ;(null == t || t > e.length) && (t = e.length)
            for (var r = 0, n = new Array(t); r < t; r++) n[r] = e[r]
            return n
        }
        function Na(e, t) {
            ;(null == t || t > e.length) && (t = e.length)
            for (var r = 0, n = new Array(t); r < t; r++) n[r] = e[r]
            return n
        }
        function Ba(e) {
            var t = Ta(e)
            return 0 === t.length
                ? 0
                : Ma(
                      t.reduce(function (e, t) {
                          return e + t
                      }, 0),
                      12,
                  )
        }
        function Fa(e) {
            var t = Ta(e)
            return 0 === t.length ? NaN : Ma(Ba(t) / t.length, 12)
        }
        ;(w.resetPage = 'resetPage'),
            (w.gotoPage = 'gotoPage'),
            (w.setPageSize = 'setPageSize'),
            (Oa.pluginName = 'usePagination')
        var Da = {
                mean: Fa,
                sum: Ba,
                max: function (e) {
                    var t = Ta(e)
                    return 0 === t.length ? NaN : Math.max.apply(null, t)
                },
                min: function (e) {
                    var t = Ta(e)
                    return 0 === t.length ? NaN : Math.min.apply(null, t)
                },
                median: function (e) {
                    var t = Ta(e)
                    return 0 === t.length
                        ? NaN
                        : (t.sort(function (e, t) {
                              return e - t
                          }),
                          t.length % 2 == 1 ? t[(t.length - 1) / 2] : Fa(t.slice(t.length / 2 - 1, t.length / 2 + 1)))
                },
            },
            Ga = {
                max: function (e) {
                    var t
                    return (
                        e.forEach(function (e) {
                            ;(null == t || e > t) && (t = e)
                        }),
                        t
                    )
                },
                min: function (e) {
                    var t
                    return (
                        e.forEach(function (e) {
                            ;(null == t || e < t) && (t = e)
                        }),
                        t
                    )
                },
                count: function (e) {
                    return e.length
                },
                unique: function (e) {
                    return ((t = new Set(e)),
                    (function (e) {
                        if (Array.isArray(e)) return Na(e)
                    })(t) ||
                        (function (e) {
                            if (('undefined' != typeof Symbol && null != e[Symbol.iterator]) || null != e['@@iterator'])
                                return Array.from(e)
                        })(t) ||
                        (function (e, t) {
                            if (e) {
                                if ('string' == typeof e) return Na(e, t)
                                var r = Object.prototype.toString.call(e).slice(8, -1)
                                return (
                                    'Object' === r && e.constructor && (r = e.constructor.name),
                                    'Map' === r || 'Set' === r
                                        ? Array.from(e)
                                        : 'Arguments' === r || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(r)
                                        ? Na(e, t)
                                        : void 0
                                )
                            }
                        })(t) ||
                        (function () {
                            throw new TypeError(
                                'Invalid attempt to spread non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.',
                            )
                        })()).join(', ')
                    var t
                },
                frequency: function (e) {
                    var t = {}
                    return (
                        e.forEach(function (e) {
                            ;(t[e] = t[e] || 0), (t[e] += 1)
                        }),
                        Object.keys(t)
                            .map(function (e) {
                                return e + (t[e] > 1 ? ' ('.concat(t[e], ')') : '')
                            })
                            .join(', ')
                    )
                },
            }
        function za(e, t) {
            return 'numeric' === t && Da[e] ? Da[e] : Ga[e]
        }
        function Ma(e) {
            var t = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : 3
            if (!Number.isFinite(e)) return e
            t = t > 0 ? t : 0
            var r = Math.pow(10, t)
            return (Math.sign(e) * Math.round(Math.abs(e) * r)) / r
        }
        function Ta(e) {
            return e.filter(function (e) {
                return null != e && !Number.isNaN(e)
            })
        }
        var Wa = ['html', 'className']
        function Ha(e, t) {
            var r = Object.keys(e)
            if (Object.getOwnPropertySymbols) {
                var n = Object.getOwnPropertySymbols(e)
                t &&
                    (n = n.filter(function (t) {
                        return Object.getOwnPropertyDescriptor(e, t).enumerable
                    })),
                    r.push.apply(r, n)
            }
            return r
        }
        function _a(e) {
            for (var t = 1; t < arguments.length; t++) {
                var r = null != arguments[t] ? arguments[t] : {}
                t % 2
                    ? Ha(Object(r), !0).forEach(function (t) {
                          La(e, t, r[t])
                      })
                    : Object.getOwnPropertyDescriptors
                    ? Object.defineProperties(e, Object.getOwnPropertyDescriptors(r))
                    : Ha(Object(r)).forEach(function (t) {
                          Object.defineProperty(e, t, Object.getOwnPropertyDescriptor(r, t))
                      })
            }
            return e
        }
        function La(e, t, r) {
            return (
                t in e
                    ? Object.defineProperty(e, t, { value: r, enumerable: !0, configurable: !0, writable: !0 })
                    : (e[t] = r),
                e
            )
        }
        function Va() {
            return (
                (Va = Object.assign
                    ? Object.assign.bind()
                    : function (e) {
                          for (var t = 1; t < arguments.length; t++) {
                              var r = arguments[t]
                              for (var n in r) Object.prototype.hasOwnProperty.call(r, n) && (e[n] = r[n])
                          }
                          return e
                      }),
                Va.apply(this, arguments)
            )
        }
        function $a(e, t) {
            var r = ('undefined' != typeof Symbol && e[Symbol.iterator]) || e['@@iterator']
            if (!r) {
                if (
                    Array.isArray(e) ||
                    (r = (function (e, t) {
                        if (e) {
                            if ('string' == typeof e) return Ua(e, t)
                            var r = Object.prototype.toString.call(e).slice(8, -1)
                            return (
                                'Object' === r && e.constructor && (r = e.constructor.name),
                                'Map' === r || 'Set' === r
                                    ? Array.from(e)
                                    : 'Arguments' === r || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(r)
                                    ? Ua(e, t)
                                    : void 0
                            )
                        }
                    })(e)) ||
                    (t && e && 'number' == typeof e.length)
                ) {
                    r && (e = r)
                    var n = 0,
                        o = function () {}
                    return {
                        s: o,
                        n: function () {
                            return n >= e.length ? { done: !0 } : { done: !1, value: e[n++] }
                        },
                        e: function (e) {
                            throw e
                        },
                        f: o,
                    }
                }
                throw new TypeError(
                    'Invalid attempt to iterate non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.',
                )
            }
            var a,
                i = !0,
                l = !1
            return {
                s: function () {
                    r = r.call(e)
                },
                n: function () {
                    var e = r.next()
                    return (i = e.done), e
                },
                e: function (e) {
                    ;(l = !0), (a = e)
                },
                f: function () {
                    try {
                        i || null == r.return || r.return()
                    } finally {
                        if (l) throw a
                    }
                },
            }
        }
        function Ua(e, t) {
            ;(null == t || t > e.length) && (t = e.length)
            for (var r = 0, n = new Array(t); r < t; r++) n[r] = e[r]
            return n
        }
        var Ka = '​',
            Xa = '.subRows'
        function Ja(e) {
            return e[Xa] || []
        }
        function qa(e, t) {
            var r,
                n = $a(t)
            try {
                for (n.s(); !(r = n.n()).done; ) {
                    var o = r.value
                    'numeric' === o.type && e[o.id] && Za(e[o.id])
                }
            } catch (e) {
                n.e(e)
            } finally {
                n.f()
            }
            return Ya(e)
        }
        function Za(e) {
            for (var t = 0; t < e.length; t++) {
                var r = e[t]
                'number' != typeof r &&
                    null != r &&
                    ((r =
                        'NA' === r
                            ? null
                            : 'NaN' === r
                            ? NaN
                            : 'Inf' === r
                            ? 1 / 0
                            : '-Inf' === r
                            ? -1 / 0
                            : Number(r)),
                    (e[t] = r))
            }
        }
        function Ya(e) {
            var t = Object.keys(e)
            if (0 === t.length) return []
            for (var r = new Array(e[t[0]].length), n = 0; n < r.length; n++) {
                r[n] = {}
                var o,
                    a = $a(t)
                try {
                    for (a.s(); !(o = a.n()).done; ) {
                        var i = o.value,
                            l = e[i][n]
                        i === Xa ? l instanceof Object && (r[n][i] = Ya(l)) : (r[n][i] = l)
                    }
                } catch (e) {
                    a.e(e)
                } finally {
                    a.f()
                }
            }
            return r
        }
        function Qa(e) {
            var t = e.html,
                r = e.className,
                n = (function (e, t) {
                    if (null == e) return {}
                    var r,
                        n,
                        o = (function (e, t) {
                            if (null == e) return {}
                            var r,
                                n,
                                o = {},
                                a = Object.keys(e)
                            for (n = 0; n < a.length; n++) (r = a[n]), t.indexOf(r) >= 0 || (o[r] = e[r])
                            return o
                        })(e, t)
                    if (Object.getOwnPropertySymbols) {
                        var a = Object.getOwnPropertySymbols(e)
                        for (n = 0; n < a.length; n++)
                            (r = a[n]),
                                t.indexOf(r) >= 0 || (Object.prototype.propertyIsEnumerable.call(e, r) && (o[r] = e[r]))
                    }
                    return o
                })(e, Wa)
            return i().createElement(
                'div',
                Va({ className: En('rt-text-content', r), dangerouslySetInnerHTML: { __html: t } }, n),
            )
        }
        function ei(e, t) {
            t.forEach(function (t) {
                var r = (t = _a({}, t)).columns
                ;(t.columns = []),
                    (e = e.reduce(function (e, n) {
                        return (
                            n.id === r[0]
                                ? (e.push(t), t.columns.push(n))
                                : r.includes(n.id)
                                ? t.columns.push(n)
                                : e.push(n),
                            e
                        )
                    }, []))
            })
            var r,
                n = []
            return (
                e.forEach(function (e) {
                    e.columns
                        ? (n.push(e), (r = null))
                        : (r || ((r = { columns: [], isUngrouped: !0 }), n.push(r)), r.columns.push(e))
                }),
                (e = n)
            )
        }
        function ti() {
            var e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : {},
                t = e.type,
                r = e.naLast
            return function (e, n, o) {
                return (
                    'numeric' === t
                        ? ((e = Number.isNaN(e) ? null : e), (n = Number.isNaN(n) ? null : n))
                        : ((e = 'string' == typeof e ? e.toLowerCase() : e),
                          (n = 'string' == typeof n ? n.toLowerCase() : n)),
                    e === n
                        ? 0
                        : null == e
                        ? r
                            ? o
                                ? -1
                                : 1
                            : -1
                        : null == n
                        ? r
                            ? o
                                ? 1
                                : -1
                            : 1
                        : e > n
                        ? 1
                        : e < n
                        ? -1
                        : 0
                )
            }
        }
        function ri(e, t) {
            var r = t.prefix,
                n = t.suffix,
                o = t.digits,
                a = t.separators,
                i = t.percent,
                l = t.currency,
                u = t.datetime,
                c = t.date,
                s = t.time,
                f = t.hour12,
                d = t.locales
            if ('number' == typeof e && (a || i || l || null != o || d)) {
                var p = 18,
                    g = { useGrouping: !!a }
                i && ((g.style = 'percent'), (p = 12)),
                    l
                        ? ((g.style = 'currency'), (g.currency = l))
                        : null != o
                        ? ((g.minimumFractionDigits = Math.min(o, p)), (g.maximumFractionDigits = Math.min(o, p)))
                        : (g.maximumFractionDigits = p),
                    (e = e.toLocaleString(d || void 0, g))
            }
            if (u || c || s) {
                d = d || void 0
                var y = {}
                null != f && (y.hour12 = f),
                    u
                        ? (e = new Date(e).toLocaleString(d, y))
                        : c
                        ? (!e.includes('-') || e.includes('T') || e.includes('Z') || (e = e.replace(/-/g, '/')),
                          (e = new Date(e).toLocaleDateString(d, y)))
                        : s && (e = new Date(e).toLocaleTimeString(d, y))
            }
            return (
                null != r && ((e = null != e ? e : ''), (e = String(r) + e)),
                null != n && ((e = null != e ? e : ''), (e += String(n))),
                e
            )
        }
        function ni(e) {
            var t = new RegExp('^' + An(e), 'i')
            return function (e) {
                return void 0 !== e && t.test(e)
            }
        }
        function oi(e) {
            var t = new RegExp(An(e), 'i')
            return function (e) {
                return void 0 !== e && t.test(e)
            }
        }
        function ai(e) {
            return 'rt-align-'.concat(e)
        }
        function ii(e) {
            return 'top' === e ? '' : 'rt-valign-'.concat(e)
        }
        var li = [
                'data',
                'columns',
                'columnGroups',
                'sortable',
                'defaultSortDesc',
                'showSortIcon',
                'showSortable',
                'filterable',
                'resizable',
                'theme',
                'language',
                'dataKey',
            ],
            ui = ['className'],
            ci = ['className'],
            si = ['className'],
            fi = ['className'],
            di = ['className'],
            pi = ['className'],
            gi = ['className'],
            yi = [
                'canSort',
                'sortDescFirst',
                'isSorted',
                'isSortedDesc',
                'toggleSortBy',
                'canResize',
                'isResizing',
                'className',
                'innerClassName',
                'children',
            ],
            mi = ['className', 'innerClassName', 'children'],
            hi = ['padding'],
            bi = ['onMouseDown', 'onTouchStart', 'className'],
            vi = ['className'],
            wi = ['state'],
            Si = ['key'],
            Oi = ['key'],
            Ri = ['key'],
            ji = ['key']
        function Pi(e) {
            return (
                (Pi =
                    'function' == typeof Symbol && 'symbol' == typeof Symbol.iterator
                        ? function (e) {
                              return typeof e
                          }
                        : function (e) {
                              return e &&
                                  'function' == typeof Symbol &&
                                  e.constructor === Symbol &&
                                  e !== Symbol.prototype
                                  ? 'symbol'
                                  : typeof e
                          }),
                Pi(e)
            )
        }
        function Ei(e) {
            return (
                (function (e) {
                    if (Array.isArray(e)) return Di(e)
                })(e) ||
                (function (e) {
                    if (('undefined' != typeof Symbol && null != e[Symbol.iterator]) || null != e['@@iterator'])
                        return Array.from(e)
                })(e) ||
                Fi(e) ||
                (function () {
                    throw new TypeError(
                        'Invalid attempt to spread non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.',
                    )
                })()
            )
        }
        function Ci(e, t) {
            var r = ('undefined' != typeof Symbol && e[Symbol.iterator]) || e['@@iterator']
            if (!r) {
                if (Array.isArray(e) || (r = Fi(e)) || (t && e && 'number' == typeof e.length)) {
                    r && (e = r)
                    var n = 0,
                        o = function () {}
                    return {
                        s: o,
                        n: function () {
                            return n >= e.length ? { done: !0 } : { done: !1, value: e[n++] }
                        },
                        e: function (e) {
                            throw e
                        },
                        f: o,
                    }
                }
                throw new TypeError(
                    'Invalid attempt to iterate non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.',
                )
            }
            var a,
                i = !0,
                l = !1
            return {
                s: function () {
                    r = r.call(e)
                },
                n: function () {
                    var e = r.next()
                    return (i = e.done), e
                },
                e: function (e) {
                    ;(l = !0), (a = e)
                },
                f: function () {
                    try {
                        i || null == r.return || r.return()
                    } finally {
                        if (l) throw a
                    }
                },
            }
        }
        function Ai(e, t) {
            if (!(e instanceof t)) throw new TypeError('Cannot call a class as a function')
        }
        function xi(e, t) {
            for (var r = 0; r < t.length; r++) {
                var n = t[r]
                ;(n.enumerable = n.enumerable || !1),
                    (n.configurable = !0),
                    'value' in n && (n.writable = !0),
                    Object.defineProperty(e, n.key, n)
            }
        }
        function ki(e, t) {
            return (
                (ki = Object.setPrototypeOf
                    ? Object.setPrototypeOf.bind()
                    : function (e, t) {
                          return (e.__proto__ = t), e
                      }),
                ki(e, t)
            )
        }
        function Ii(e, t) {
            if (t && ('object' === Pi(t) || 'function' == typeof t)) return t
            if (void 0 !== t) throw new TypeError('Derived constructors may only return object or undefined')
            return (function (e) {
                if (void 0 === e) throw new ReferenceError("this hasn't been initialised - super() hasn't been called")
                return e
            })(e)
        }
        function Ni(e) {
            return (
                (Ni = Object.setPrototypeOf
                    ? Object.getPrototypeOf.bind()
                    : function (e) {
                          return e.__proto__ || Object.getPrototypeOf(e)
                      }),
                Ni(e)
            )
        }
        function Bi(e, t) {
            return (
                (function (e) {
                    if (Array.isArray(e)) return e
                })(e) ||
                (function (e, t) {
                    var r = null == e ? null : ('undefined' != typeof Symbol && e[Symbol.iterator]) || e['@@iterator']
                    if (null != r) {
                        var n,
                            o,
                            a = [],
                            i = !0,
                            l = !1
                        try {
                            for (
                                r = r.call(e);
                                !(i = (n = r.next()).done) && (a.push(n.value), !t || a.length !== t);
                                i = !0
                            );
                        } catch (e) {
                            ;(l = !0), (o = e)
                        } finally {
                            try {
                                i || null == r.return || r.return()
                            } finally {
                                if (l) throw o
                            }
                        }
                        return a
                    }
                })(e, t) ||
                Fi(e, t) ||
                (function () {
                    throw new TypeError(
                        'Invalid attempt to destructure non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.',
                    )
                })()
            )
        }
        function Fi(e, t) {
            if (e) {
                if ('string' == typeof e) return Di(e, t)
                var r = Object.prototype.toString.call(e).slice(8, -1)
                return (
                    'Object' === r && e.constructor && (r = e.constructor.name),
                    'Map' === r || 'Set' === r
                        ? Array.from(e)
                        : 'Arguments' === r || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(r)
                        ? Di(e, t)
                        : void 0
                )
            }
        }
        function Di(e, t) {
            ;(null == t || t > e.length) && (t = e.length)
            for (var r = 0, n = new Array(t); r < t; r++) n[r] = e[r]
            return n
        }
        function Gi() {
            return (
                (Gi = Object.assign
                    ? Object.assign.bind()
                    : function (e) {
                          for (var t = 1; t < arguments.length; t++) {
                              var r = arguments[t]
                              for (var n in r) Object.prototype.hasOwnProperty.call(r, n) && (e[n] = r[n])
                          }
                          return e
                      }),
                Gi.apply(this, arguments)
            )
        }
        function zi(e, t) {
            var r = Object.keys(e)
            if (Object.getOwnPropertySymbols) {
                var n = Object.getOwnPropertySymbols(e)
                t &&
                    (n = n.filter(function (t) {
                        return Object.getOwnPropertyDescriptor(e, t).enumerable
                    })),
                    r.push.apply(r, n)
            }
            return r
        }
        function Mi(e) {
            for (var t = 1; t < arguments.length; t++) {
                var r = null != arguments[t] ? arguments[t] : {}
                t % 2
                    ? zi(Object(r), !0).forEach(function (t) {
                          Ti(e, t, r[t])
                      })
                    : Object.getOwnPropertyDescriptors
                    ? Object.defineProperties(e, Object.getOwnPropertyDescriptors(r))
                    : zi(Object(r)).forEach(function (t) {
                          Object.defineProperty(e, t, Object.getOwnPropertyDescriptor(r, t))
                      })
            }
            return e
        }
        function Ti(e, t, r) {
            return (
                t in e
                    ? Object.defineProperty(e, t, { value: r, enumerable: !0, configurable: !0, writable: !0 })
                    : (e[t] = r),
                e
            )
        }
        function Wi(e, t) {
            if (null == e) return {}
            var r,
                n,
                o = (function (e, t) {
                    if (null == e) return {}
                    var r,
                        n,
                        o = {},
                        a = Object.keys(e)
                    for (n = 0; n < a.length; n++) (r = a[n]), t.indexOf(r) >= 0 || (o[r] = e[r])
                    return o
                })(e, t)
            if (Object.getOwnPropertySymbols) {
                var a = Object.getOwnPropertySymbols(e)
                for (n = 0; n < a.length; n++)
                    (r = a[n]), t.indexOf(r) >= 0 || (Object.prototype.propertyIsEnumerable.call(e, r) && (o[r] = e[r]))
            }
            return o
        }
        var Hi = {}
        function _i(e) {
            if (!e) throw new Error('A reactable table ID must be provided')
            var t = Hi[e]
            if (!t) throw new Error("reactable instance '".concat(e, "' not found"))
            return t()
        }
        function Li(e) {
            return _i(e).state
        }
        function Vi(e, t, r) {
            _i(e).setFilter(t, r)
        }
        function $i(e, t) {
            _i(e).setAllFilters(t)
        }
        function Ui(e, t) {
            _i(e).setGlobalFilter(t)
        }
        function Ki(e, t, r) {
            _i(e).toggleGroupBy(t, r)
        }
        function Xi(e, t) {
            _i(e).setGroupBy(t)
        }
        function Ji(e, t) {
            _i(e).toggleAllRowsExpanded(t)
        }
        function qi(e) {
            var t = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : 'data.csv',
                r = arguments.length > 2 && void 0 !== arguments[2] ? arguments[2] : {}
            _i(e).downloadDataCSV(t, r)
        }
        function Zi(e) {
            var t = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : {}
            return _i(e).getDataCSV(t)
        }
        function Yi(e, t) {
            _i(e).setMeta(t)
        }
        function Qi(e, t, r) {
            _i(e).toggleHideColumn(t, r)
        }
        function el(e, t) {
            _i(e).setHiddenColumns(t)
        }
        function tl(e, t, r) {
            _i(e).setData(t, r)
        }
        function rl(e, t) {
            return _i(e).onStateChange(t)
        }
        function nl(e) {
            var t = e.data,
                r = e.columns,
                n = e.columnGroups,
                o = e.sortable,
                l = e.defaultSortDesc,
                u = e.showSortIcon,
                c = e.showSortable,
                s = e.filterable,
                f = e.resizable,
                d = e.theme,
                p = e.language,
                g = e.dataKey,
                y = Wi(e, li)
            for (var m in ((t = qa(t, r)),
            (r = (function (e, t) {
                var r = arguments.length > 2 && void 0 !== arguments[2] ? arguments[2] : {},
                    n = r.sortable,
                    o = r.defaultSortDesc,
                    l = r.showSortIcon,
                    u = r.showSortable,
                    c = r.filterable,
                    s = r.resizable
                return (
                    (e = e.map(function (e) {
                        var t = _a({}, e)
                        ;(t.accessor = function (e) {
                            return e[t.id]
                        }),
                            'string' == typeof t.aggregate && (t.aggregate = za(t.aggregate, t.type))
                        var r = ti({ type: t.type, naLast: t.sortNALast })
                        ;(t.sortType = function (e, t, n, o) {
                            return r(e.values[n], t.values[n], o)
                        }),
                            (t.sortable = Cn(t.sortable, n)),
                            (t.disableSortBy = !t.sortable),
                            (t.defaultSortDesc = Cn(t.defaultSortDesc, o)),
                            (t.sortDescFirst = t.defaultSortDesc),
                            (t.filterable = Cn(t.filterable, c)),
                            (t.disableFilters = !t.filterable),
                            !1 === t.searchable && (t.disableGlobalFilter = !0),
                            !1 === t.show && !0 !== t.searchable && (t.disableGlobalFilter = !0),
                            'numeric' === t.type ? (t.createMatcher = ni) : (t.createMatcher = oi),
                            (t.filter = function (e, r, n) {
                                var o = r[0]
                                if ('function' == typeof t.filterMethod) return t.filterMethod(e, o, n)
                                var a = t.createMatcher(n)
                                return e.filter(function (e) {
                                    var t = e.values[o]
                                    return a(t)
                                })
                            }),
                            'numeric' === t.type ? (t.align = t.align || 'right') : (t.align = t.align || 'left'),
                            (t.vAlign = t.vAlign || 'top'),
                            (t.headerVAlign = t.headerVAlign || 'top')
                        var f = t.width,
                            d = t.minWidth,
                            p = t.maxWidth
                        ;(t.minWidth = Cn(f, d, 100)),
                            (t.maxWidth = Cn(f, p, Number.MAX_SAFE_INTEGER)),
                            (t.minWidth = Math.min(t.minWidth, t.maxWidth)),
                            (t.width = t.minWidth),
                            (t.resizable = Cn(t.resizable, s)),
                            t.minWidth === t.maxWidth && (t.resizable = !1),
                            (t.disableResizing = !t.resizable),
                            (t.Cell = function (e, r) {
                                var n = e.value,
                                    o = null == n || Number.isNaN(n)
                                return (
                                    o && (n = t.na),
                                    !o && t.format && t.format.cell && (n = ri(n, t.format.cell)),
                                    t.cell &&
                                        ('function' == typeof t.cell &&
                                            (n = t.cell(_a(_a({}, e), {}, { value: n }), r)),
                                        Array.isArray(t.cell) &&
                                            !e.aggregated &&
                                            (n = t.cell[e.index]) &&
                                            (n = (0, tr.hydrate)({ Fragment: a.Fragment, WidgetContainer: po }, n))),
                                    (null != n && '' !== n) || (n = Ka),
                                    i().isValidElement(n)
                                        ? n
                                        : t.html
                                        ? i().createElement(Qa, { style: { display: 'inline' }, html: n })
                                        : String(n)
                                )
                            }),
                            t.grouped
                                ? (t.Grouped = function (e, r) {
                                      var n = e.value,
                                          o = null == n || Number.isNaN(n)
                                      return (
                                          o && (n = t.na),
                                          !o && t.format && t.format.cell && (n = ri(n, t.format.cell)),
                                          (null != (n = t.grouped(_a(_a({}, e), {}, { value: n }), r)) && '' !== n) ||
                                              (n = Ka),
                                          i().isValidElement(n)
                                              ? n
                                              : t.html
                                              ? i().createElement(Qa, { style: { display: 'inline' }, html: n })
                                              : String(n)
                                      )
                                  })
                                : (t.Grouped = function (e, r) {
                                      var n = t.Cell(e, r)
                                      return i().createElement(
                                          i().Fragment,
                                          null,
                                          n,
                                          e.subRows && ' ('.concat(e.subRows.length, ')'),
                                      )
                                  }),
                            (t.Aggregated = function (e, r) {
                                var n,
                                    o = e.value
                                if (
                                    (null != o && t.format && t.format.aggregated && (o = ri(o, t.format.aggregated)),
                                    t.aggregated && (o = t.aggregated(_a(_a({}, e), {}, { value: o }), r)),
                                    null == o && (o = ''),
                                    i().isValidElement(o))
                                )
                                    n = o
                                else {
                                    if (t.html) return i().createElement(Qa, { html: o })
                                    n = String(o)
                                }
                                return n
                            }),
                            (t.Header = function (e, r) {
                                var n,
                                    o = t.name
                                if (
                                    (null != t.header &&
                                        (o =
                                            'function' == typeof t.header
                                                ? t.header(e, r)
                                                : (0, tr.hydrate)(
                                                      { Fragment: a.Fragment, WidgetContainer: po },
                                                      t.header,
                                                  )),
                                    (n = i().isValidElement(o)
                                        ? o
                                        : t.html
                                        ? i().createElement(Qa, { html: o })
                                        : null != o
                                        ? String(o)
                                        : ''),
                                    t.sortable && l)
                                ) {
                                    var c = u ? 'rt-sort' : ''
                                    return (
                                        (n = t.html
                                            ? n
                                            : i().createElement('div', { className: 'rt-text-content' }, n)),
                                        'right' === t.align
                                            ? i().createElement(
                                                  'div',
                                                  { className: 'rt-sort-header' },
                                                  i().createElement('span', {
                                                      className: En(c, 'rt-sort-left'),
                                                      'aria-hidden': 'true',
                                                  }),
                                                  n,
                                              )
                                            : i().createElement(
                                                  'div',
                                                  { className: 'rt-sort-header' },
                                                  n,
                                                  i().createElement('span', {
                                                      className: En(c, 'rt-sort-right'),
                                                      'aria-hidden': 'true',
                                                  }),
                                              )
                                    )
                                }
                                return n
                            }),
                            null != t.footer
                                ? (t.Footer = function (e, r) {
                                      var n
                                      return (
                                          (n =
                                              'function' == typeof t.footer
                                                  ? t.footer(e, r)
                                                  : (0, tr.hydrate)(
                                                        { Fragment: a.Fragment, WidgetContainer: po },
                                                        t.footer,
                                                    )),
                                          i().isValidElement(n)
                                              ? n
                                              : t.html
                                              ? i().createElement(Qa, { html: n })
                                              : null != n
                                              ? String(n)
                                              : ''
                                      )
                                  })
                                : (t.Footer = Ka)
                        var g = ai(t.align),
                            y = ii(t.vAlign),
                            m = ii(t.headerVAlign)
                        return (
                            (t.headerClassName = En(g, m, t.headerClassName)),
                            (t.footerClassName = En(g, y, t.footerClassName)),
                            (t.getProps = function (e, r, n) {
                                var o,
                                    a,
                                    i = { className: En(g, y) }
                                return (
                                    t.className &&
                                        ((o =
                                            'function' == typeof t.className
                                                ? t.className(e, r, n)
                                                : Array.isArray(t.className)
                                                ? t.className[e.index]
                                                : t.className),
                                        (i.className = En(i.className, o))),
                                    t.style &&
                                        ((a =
                                            'function' == typeof t.style
                                                ? t.style(e, r, n)
                                                : Array.isArray(t.style)
                                                ? t.style[e.index]
                                                : t.style),
                                        (i.style = a)),
                                    i
                                )
                            }),
                            t
                        )
                    })),
                    t &&
                        (e = ei(e, t)).forEach(function (e, t) {
                            ;(e.id = 'group_'.concat(t)),
                                null != e.name || null != e.header
                                    ? (e.Header = function (t, r) {
                                          var n = e.name
                                          return (
                                              e.header &&
                                                  (n =
                                                      'function' == typeof e.header
                                                          ? e.header(t, r)
                                                          : (0, tr.hydrate)(
                                                                { Fragment: a.Fragment, WidgetContainer: po },
                                                                e.header,
                                                            )),
                                              i().isValidElement(n)
                                                  ? n
                                                  : e.html
                                                  ? i().createElement(Qa, { html: n })
                                                  : null != n
                                                  ? String(n)
                                                  : ''
                                          )
                                      })
                                    : (e.Header = Ka),
                                xn(e).every(function (e) {
                                    return e.disableResizing
                                }) && (e.disableResizing = !0),
                                (e.align = e.align || 'center'),
                                (e.headerVAlign = e.headerVAlign || 'top')
                            var r = ai(e.align),
                                n = ii(e.headerVAlign)
                            e.headerClassName = En(r, n, e.headerClassName)
                        }),
                    e
                )
            })(r, n, {
                sortable: o,
                defaultSortDesc: l,
                showSortIcon: u,
                showSortable: c,
                filterable: s,
                resizable: f,
            })),
            (d = Hn(d) || {}),
            (p = Mi(Mi({}, Kn), p))))
                p[m] = p[m] || null
            return i().createElement(Ol, Gi({ data: t, columns: r, theme: d, language: p, key: g }, y))
        }
        var ol = i().forwardRef(function (e, t) {
                var r = e.className,
                    n = Wi(e, ui)
                return i().createElement('div', Gi({ ref: t, className: En('Reactable', 'ReactTable', r) }, n))
            }),
            al = i().forwardRef(function (e, t) {
                var r = e.className,
                    n = Wi(e, ci)
                return i().createElement('div', Gi({ ref: t, className: En('rt-table', r), role: 'table' }, n))
            })
        function il(e) {
            var t = e.className,
                r = Wi(e, si)
            return i().createElement('div', Gi({ className: En('rt-thead', t), role: 'rowgroup' }, r))
        }
        function ll(e) {
            var t = e.className,
                r = Wi(e, fi)
            return i().createElement('div', Gi({ className: En('rt-tbody', t), role: 'rowgroup' }, r))
        }
        function ul(e) {
            var t = e.className,
                r = Wi(e, di)
            return i().createElement('div', Gi({ className: En('rt-tfoot', t), role: 'rowgroup' }, r))
        }
        function cl(e) {
            var t = e.className,
                r = Wi(e, pi)
            return i().createElement('div', Gi({ className: En('rt-tr-group', t) }, r))
        }
        function sl(e) {
            var t = e.className,
                r = Wi(e, gi)
            return i().createElement('div', Gi({ className: En('rt-tr', t), role: 'row' }, r))
        }
        var fl = i().forwardRef(function (e, t) {
            var r = e.canSort,
                n = e.sortDescFirst,
                o = e.isSorted,
                a = e.isSortedDesc,
                l = e.toggleSortBy,
                u = e.canResize,
                c = e.isResizing,
                s = e.className,
                f = e.innerClassName,
                d = e.children,
                p = Wi(e, yi),
                g = Bi(i().useState(!1), 2),
                y = g[0],
                m = g[1]
            if (r) {
                var h = o ? (a ? 'descending' : 'ascending') : 'none',
                    b = n ? 'descending' : 'ascending',
                    v = function (e) {
                        var t = o ? !a : n
                        e && (t = null), l && l(t, e)
                    }
                p = Mi(
                    Mi({}, p),
                    {},
                    {
                        'aria-sort': h,
                        tabIndex: '0',
                        onClick: function (e) {
                            y || v(e.shiftKey)
                        },
                        onKeyPress: function (e) {
                            var t = e.which || e.keyCode
                            ;(13 !== t && 32 !== t) || v(e.shiftKey)
                        },
                        onMouseUp: function () {
                            m(!!c)
                        },
                        onMouseDown: function (e) {
                            ;(e.detail > 1 || e.shiftKey) && e.preventDefault()
                        },
                        'data-sort-hint': o ? null : b,
                    },
                )
            }
            return i().createElement(
                'div',
                Gi({ className: En('rt-th', u && 'rt-th-resizable', s), role: 'columnheader', ref: t }, p),
                i().createElement('div', { className: En('rt-th-inner', f) }, d),
            )
        })
        function dl(e) {
            var t = e.className,
                r = e.innerClassName,
                n = e.children,
                o = Wi(e, mi)
            return i().createElement(
                'div',
                Gi({ className: En('rt-td', t), role: 'cell' }, o),
                i().createElement('div', { className: En('rt-td-inner', r) }, n),
            )
        }
        function pl(e) {
            if (!e) return {}
            if (null != e.padding) {
                var t = e.padding
                return { className: $n(Wi(e, hi)), innerClassName: $n({ padding: t }) }
            }
            return { className: $n(e) }
        }
        function gl(e) {
            var t = e.onMouseDown,
                r = e.onTouchStart,
                n = e.className,
                o = Wi(e, bi)
            return i().createElement(
                'div',
                Gi({ className: En('rt-resizer', n), onMouseDown: t, onTouchStart: r, 'aria-hidden': !0 }, o),
            )
        }
        var yl,
            ml = (function (e) {
                !(function (e, t) {
                    if ('function' != typeof t && null !== t)
                        throw new TypeError('Super expression must either be null or a function')
                    ;(e.prototype = Object.create(t && t.prototype, {
                        constructor: { value: e, writable: !0, configurable: !0 },
                    })),
                        Object.defineProperty(e, 'prototype', { writable: !1 }),
                        t && ki(e, t)
                })(l, e)
                var t,
                    r,
                    n,
                    o,
                    a =
                        ((n = l),
                        (o = (function () {
                            if ('undefined' == typeof Reflect || !Reflect.construct) return !1
                            if (Reflect.construct.sham) return !1
                            if ('function' == typeof Proxy) return !0
                            try {
                                return (
                                    Boolean.prototype.valueOf.call(Reflect.construct(Boolean, [], function () {})), !0
                                )
                            } catch (e) {
                                return !1
                            }
                        })()),
                        function () {
                            var e,
                                t = Ni(n)
                            if (o) {
                                var r = Ni(this).constructor
                                e = Reflect.construct(t, arguments, r)
                            } else e = t.apply(this, arguments)
                            return Ii(this, e)
                        })
                function l() {
                    return Ai(this, l), a.apply(this, arguments)
                }
                return (
                    (t = l),
                    (r = [
                        {
                            key: 'componentDidMount',
                            value: function () {
                                window.Shiny && window.Shiny.bindAll && window.Shiny.bindAll(this.el)
                            },
                        },
                        {
                            key: 'componentWillUnmount',
                            value: function () {
                                window.Shiny && window.Shiny.unbindAll && window.Shiny.unbindAll(this.el)
                            },
                        },
                        {
                            key: 'render',
                            value: function () {
                                var e = this,
                                    t = this.props,
                                    r = t.children,
                                    n = t.html,
                                    o = {
                                        ref: function (t) {
                                            return (e.el = t)
                                        },
                                    }
                                return (
                                    (o = Mi(
                                        Mi({}, o),
                                        {},
                                        n ? { dangerouslySetInnerHTML: { __html: n } } : { children: r },
                                    )),
                                    i().createElement('div', Gi({ className: 'rt-tr-details' }, o))
                                )
                            },
                        },
                    ]) && xi(t.prototype, r),
                    Object.defineProperty(t, 'prototype', { writable: !1 }),
                    l
                )
            })(i().Component)
        function hl(e) {
            var t = e.isExpanded,
                r = e.className,
                n = e['aria-label']
            return i().createElement(
                'button',
                { className: 'rt-expander-button', 'aria-label': n, 'aria-expanded': t ? 'true' : 'false' },
                i().createElement(
                    'span',
                    { className: En('rt-expander', t && 'rt-expander-open', r), tabIndex: '-1', 'aria-hidden': 'true' },
                    '​',
                ),
            )
        }
        function bl(e) {
            var t = e.filterValue,
                r = e.setFilter,
                n = e.className,
                o = e.placeholder,
                a = e['aria-label']
            return i().createElement('input', {
                type: 'text',
                className: En('rt-filter', n),
                value: t || '',
                onChange: function (e) {
                    return r(e.target.value || void 0)
                },
                placeholder: o,
                'aria-label': a,
            })
        }
        function vl(e) {
            var t = e.searchValue,
                r = e.setSearch,
                n = e.className,
                o = e.placeholder,
                a = e['aria-label']
            return i().createElement('input', {
                type: 'text',
                value: t || '',
                onChange: function (e) {
                    return r(e.target.value || void 0)
                },
                className: En('rt-search', n),
                placeholder: o,
                'aria-label': a,
            })
        }
        function wl(e) {
            var t = e.className,
                r = Wi(e, vi)
            return i().createElement('div', Gi({ className: En('rt-no-data', t), 'aria-live': 'assertive' }, r))
        }
        function Sl(e) {
            var t = e.type,
                r = e.checked,
                n = e.onChange,
                o = e['aria-label']
            return i().createElement(
                'div',
                { className: 'rt-select' },
                i().createElement('input', {
                    type: t,
                    checked: r,
                    onChange: n,
                    className: 'rt-select-input',
                    'aria-label': o,
                }),
                '​',
            )
        }
        function Ol(e) {
            var t = e.data,
                r = e.columns,
                n = e.groupBy,
                o = e.searchable,
                l = e.searchMethod,
                u = e.defaultSorted,
                c = e.pagination,
                s = e.paginationType,
                f = e.showPagination,
                d = e.showPageSizeOptions,
                p = e.showPageInfo,
                g = e.defaultPageSize,
                y = e.pageSizeOptions,
                m = e.minRows,
                h = e.paginateSubRows,
                b = e.defaultExpanded,
                v = e.selection,
                S = e.defaultSelected,
                O = e.selectionId,
                R = e.onClick,
                j = e.outlined,
                A = e.bordered,
                x = e.borderless,
                F = e.compact,
                D = e.nowrap,
                G = e.striped,
                z = e.highlight,
                L = e.className,
                V = e.style,
                $ = e.rowClassName,
                U = e.rowStyle,
                K = e.inline,
                X = e.width,
                J = e.height,
                q = e.theme,
                Z = e.language,
                Y = e.meta,
                Q = e.crosstalkKey,
                ee = e.crosstalkGroup,
                te = e.crosstalkId,
                re = e.elementId,
                ne = e.nested,
                oe = Bi(i().useState(null), 2),
                ae = oe[0],
                ie = oe[1],
                le = i().useMemo(
                    function () {
                        return ae || t
                    },
                    [ae, t],
                ),
                ue = i().useMemo(
                    function () {
                        return r.reduce(function (e, t) {
                            return e.concat(xn(t))
                        }, [])
                    },
                    [r],
                ),
                ce = i().useMemo(
                    function () {
                        return (
                            l ||
                            function (e, t, r) {
                                var n = ue.reduce(function (e, t) {
                                    return (e[t.id] = t.createMatcher(r)), e
                                }, {})
                                return e.filter(function (e) {
                                    var r,
                                        o = Ci(t)
                                    try {
                                        for (o.s(); !(r = o.n()).done; ) {
                                            var a = r.value,
                                                i = e.values[a]
                                            if (n[a](i)) return !0
                                        }
                                    } catch (e) {
                                        o.e(e)
                                    } finally {
                                        o.f()
                                    }
                                })
                            }
                        )
                    },
                    [ue, l],
                ),
                fe = (function () {
                    var e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : {},
                        t = ka(i().useState(e), 2),
                        r = t[0],
                        n = t[1],
                        o = function (e) {
                            if (null != e) {
                                if ('object' !== xa(e) && 'function' != typeof e)
                                    throw new Error('meta must be an object or function')
                                n(function (t) {
                                    'function' == typeof e && (e = e(t))
                                    for (var r = Ca(Ca({}, t), e), n = 0, o = Object.entries(r); n < o.length; n++) {
                                        var a = ka(o[n], 2),
                                            i = a[0]
                                        void 0 === a[1] && delete e[i]
                                    }
                                    return r
                                })
                            } else n({})
                        }
                    return [r, o]
                })(Y),
                de = Bi(fe, 2),
                pe = de[0],
                ge = de[1],
                ye = (function (e) {
                    for (var t = arguments.length, r = new Array(t > 1 ? t - 1 : 0), n = 1; n < t; n++)
                        r[n - 1] = arguments[n]
                    ;(e = Ge(e)), (r = [me].concat(je(r)))
                    var o = k(i().useRef({}).current)
                    Object.assign(o(), Ae(Ae({}, e), {}, { plugins: r, hooks: se() })),
                        r.filter(Boolean).forEach(function (e) {
                            e(o().hooks)
                        })
                    var a = k(o().hooks)
                    ;(o().getHooks = a), delete o().hooks, Object.assign(o(), E(a().useOptions, Ge(e)))
                    var l = o(),
                        u = l.data,
                        c = l.columns,
                        s = l.initialState,
                        f = l.defaultColumn,
                        d = l.getSubRows,
                        p = l.getRowId,
                        g = l.stateReducer,
                        y = l.useControlledState,
                        m = k(g),
                        h = i().useCallback(
                            function (e, t) {
                                if (!t.type) throw (console.info({ action: t }), new Error('Unknown Action 👆'))
                                return []
                                    .concat(je(a().stateReducers), je(Array.isArray(m()) ? m() : [m()]))
                                    .reduce(function (r, n) {
                                        return n(r, t, e, o()) || r
                                    }, e)
                            },
                            [a, m, o],
                        ),
                        b = Re(
                            i().useReducer(h, void 0, function () {
                                return h(s, { type: w.init })
                            }),
                            2,
                        ),
                        v = b[0],
                        S = b[1],
                        O = E([].concat(je(a().useControlledState), [y]), v, { instance: o() })
                    Object.assign(o(), { state: O, dispatch: S })
                    var R = i().useMemo(function () {
                        return M(E(a().columns, c, { instance: o() }))
                    }, [a, o, c].concat(je(E(a().columnsDeps, [], { instance: o() }))))
                    o().columns = R
                    var j = i().useMemo(function () {
                        return E(a().allColumns, T(R), { instance: o() }).map(W)
                    }, [R, a, o].concat(je(E(a().allColumnsDeps, [], { instance: o() }))))
                    o().allColumns = j
                    var A = i().useMemo(
                            function () {
                                for (var e = [], t = [], r = {}, n = je(j); n.length; ) {
                                    var i = n.shift()
                                    Me({
                                        data: u,
                                        rows: e,
                                        flatRows: t,
                                        rowsById: r,
                                        column: i,
                                        getRowId: p,
                                        getSubRows: d,
                                        accessValueHooks: a().accessValue,
                                        getInstance: o,
                                    })
                                }
                                return [e, t, r]
                            },
                            [j, u, p, d, a, o],
                        ),
                        x = Re(A, 3),
                        I = x[0],
                        N = x[1],
                        F = x[2]
                    Object.assign(o(), { rows: I, initialRows: je(I), flatRows: N, rowsById: F }),
                        C(a().useInstanceAfterData, o())
                    var D = i().useMemo(function () {
                        return E(a().visibleColumns, j, { instance: o() }).map(function (e) {
                            return H(e, f)
                        })
                    }, [a, j, o, f].concat(je(E(a().visibleColumnsDeps, [], { instance: o() }))))
                    ;(j = i().useMemo(
                        function () {
                            var e = je(D)
                            return (
                                j.forEach(function (t) {
                                    e.find(function (e) {
                                        return e.id === t.id
                                    }) || e.push(t)
                                }),
                                e
                            )
                        },
                        [j, D],
                    )),
                        (o().allColumns = j)
                    var G = i().useMemo(function () {
                        return E(a().headerGroups, _(D, f), o())
                    }, [a, D, f, o].concat(je(E(a().headerGroupsDeps, [], { instance: o() }))))
                    o().headerGroups = G
                    var z = i().useMemo(
                        function () {
                            return G.length ? G[0].headers : []
                        },
                        [G],
                    )
                    ;(o().headers = z),
                        (o().flatHeaders = G.reduce(function (e, t) {
                            return [].concat(je(e), je(t.headers))
                        }, [])),
                        C(a().useInstanceBeforeDimensions, o())
                    var L = D.filter(function (e) {
                        return e.isVisible
                    })
                        .map(function (e) {
                            return e.id
                        })
                        .sort()
                        .join('_')
                    ;(D = i().useMemo(
                        function () {
                            return D.filter(function (e) {
                                return e.isVisible
                            })
                        },
                        [D, L],
                    )),
                        (o().visibleColumns = D)
                    var V = Re(ze(z), 3),
                        $ = V[0],
                        U = V[1],
                        K = V[2]
                    return (
                        (o().totalColumnsMinWidth = $),
                        (o().totalColumnsWidth = U),
                        (o().totalColumnsMaxWidth = K),
                        C(a().useInstance, o()),
                        [].concat(je(o().flatHeaders), je(o().allColumns)).forEach(function (e) {
                            ;(e.render = B(o(), e)),
                                (e.getHeaderProps = P(a().getHeaderProps, { instance: o(), column: e })),
                                (e.getFooterProps = P(a().getFooterProps, { instance: o(), column: e }))
                        }),
                        (o().headerGroups = i().useMemo(
                            function () {
                                return G.filter(function (e, t) {
                                    return (
                                        (e.headers = e.headers.filter(function (e) {
                                            return e.headers
                                                ? (function e(t) {
                                                      return t.filter(function (t) {
                                                          return t.headers ? e(t.headers) : t.isVisible
                                                      }).length
                                                  })(e.headers)
                                                : e.isVisible
                                        })),
                                        !!e.headers.length &&
                                            ((e.getHeaderGroupProps = P(a().getHeaderGroupProps, {
                                                instance: o(),
                                                headerGroup: e,
                                                index: t,
                                            })),
                                            (e.getFooterGroupProps = P(a().getFooterGroupProps, {
                                                instance: o(),
                                                headerGroup: e,
                                                index: t,
                                            })),
                                            !0)
                                    )
                                })
                            },
                            [G, o, a],
                        )),
                        (o().footerGroups = je(o().headerGroups).reverse()),
                        (o().prepareRow = i().useCallback(
                            function (e) {
                                ;(e.getRowProps = P(a().getRowProps, { instance: o(), row: e })),
                                    (e.allCells = j.map(function (t) {
                                        var r = e.values[t.id],
                                            n = { column: t, row: e, value: r }
                                        return (
                                            (n.getCellProps = P(a().getCellProps, { instance: o(), cell: n })),
                                            (n.render = B(o(), t, { row: e, cell: n, value: r })),
                                            n
                                        )
                                    })),
                                    (e.cells = D.map(function (t) {
                                        return e.allCells.find(function (e) {
                                            return e.column.id === t.id
                                        })
                                    })),
                                    C(a().prepareRow, e, { instance: o() })
                            },
                            [a, o, j, D],
                        )),
                        (o().getTableProps = P(a().getTableProps, { instance: o() })),
                        (o().getTableBodyProps = P(a().getTableBodyProps, { instance: o() })),
                        C(a().useFinalInstance, o()),
                        o()
                    )
                })(
                    {
                        columns: r,
                        data: le,
                        initialState: {
                            hiddenColumns: ue
                                .filter(function (e) {
                                    return !1 === e.show
                                })
                                .map(function (e) {
                                    return e.id
                                }),
                            groupBy: n || [],
                            sortBy: u || [],
                            pageSize: g,
                            selectedRowIds: S
                                ? S.reduce(function (e, t) {
                                      return Mi(Mi({}, e), {}, Ti({}, t, !0))
                                  }, {})
                                : {},
                        },
                        globalFilter: ce,
                        paginateExpandedRows: !!h,
                        disablePagination: !c,
                        getSubRows: Ja,
                        manualExpandedKey: null,
                        autoResetGroupBy: !1,
                        autoResetSortBy: !1,
                        autoResetExpanded: !1,
                        autoResetFilters: !1,
                        autoResetGlobalFilter: !1,
                        autoResetSelectedRows: !1,
                        autoResetResize: !1,
                        autoResetPage: !0,
                    },
                    ta,
                    go,
                    Po,
                    dt,
                    wt,
                    Wo,
                    qt,
                    Ve,
                    Oa,
                    ca,
                    function (e) {
                        v &&
                            e.visibleColumns.push(function (e) {
                                return [
                                    Mi(
                                        Mi(
                                            {},
                                            e.find(function (e) {
                                                return e.selectable
                                            }),
                                        ),
                                        {},
                                        {
                                            selectable: !0,
                                            disableSortBy: !0,
                                            filterable: !1,
                                            disableFilters: !0,
                                            disableGlobalFilter: !0,
                                        },
                                    ),
                                ].concat(
                                    Ei(
                                        e.filter(function (e) {
                                            return !e.selectable
                                        }),
                                    ),
                                )
                            })
                    },
                    function (e) {
                        ee &&
                            (e.visibleColumns.push(function (e) {
                                var t = {
                                    id: te,
                                    filter: function (e, t, r) {
                                        return r
                                            ? e.filter(function (e) {
                                                  if (r.includes(e.index)) return !0
                                              })
                                            : e
                                    },
                                    disableGlobalFilter: !0,
                                }
                                return e.concat(t)
                            }),
                            e.stateReducers.push(function (e) {
                                return e.hiddenColumns.includes(te)
                                    ? e
                                    : Mi(Mi({}, e), {}, { hiddenColumns: e.hiddenColumns.concat(te) })
                            }))
                    },
                ),
                he = ye.state,
                be = Wi(ye, wi)
            N(
                function () {
                    ;(0, be.setSortBy)(u || [])
                },
                [be.setSortBy, u],
            ),
                N(
                    function () {
                        ;(0, be.setGroupBy)(n || [])
                    },
                    [be.setGroupBy, n],
                ),
                N(
                    function () {
                        ;(0, be.setPageSize)(g)
                    },
                    [be.setPageSize, g],
                ),
                N(
                    function () {
                        ;(0, be.setRowsSelected)(
                            (S || []).map(function (e) {
                                return String(e)
                            }),
                        )
                    },
                    [be.setRowsSelected, S],
                )
            var ve = be.preFilteredRowsById || be.rowsById,
                we = i().useMemo(
                    function () {
                        return Object.keys(he.selectedRowIds).reduce(function (e, t) {
                            var r = ve[t]
                            return r && e.push(r.index), e
                        }, [])
                    },
                    [he.selectedRowIds, ve],
                )
            i().useEffect(
                function () {
                    if (v) {
                        var e = we.map(function (e) {
                            return e + 1
                        })
                        O && window.Shiny && window.Shiny.onInputChange(O, e)
                    }
                },
                [we, v, O],
            )
            var Se = i().useRef(o)
            I(
                function () {
                    Se.current && !o && (0, be.setGlobalFilter)(void 0), (Se.current = o)
                },
                [o, be.setGlobalFilter],
            )
            var Oe = kn(be.rows),
                Pe = i().useMemo(
                    function () {
                        return Mi(
                            Mi({}, he),
                            {},
                            {
                                searchValue: he.globalFilter,
                                meta: pe,
                                hiddenColumns: he.hiddenColumns.filter(function (e) {
                                    return e !== te
                                }),
                                sorted: he.sortBy,
                                pageRows: kn(be.page),
                                sortedData: Oe,
                                data: le,
                                page: he.pageIndex,
                                pageSize: he.pageSize,
                                pages: be.pageCount,
                                selected: we,
                            },
                        )
                    },
                    [he, pe, te, be.page, Oe, le, be.pageCount, we],
                ),
                Ee = i().useRef({})
            be.headers.forEach(function e(t) {
                ;(t.getDOMWidth = function () {
                    return Ee.current[t.id].getBoundingClientRect().width
                }),
                    t.headers &&
                        t.headers.length &&
                        t.headers.forEach(function (t) {
                            return e(t)
                        })
            })
            var Ce = be.visibleColumns.some(function (e) {
                    return e.filterable
                }),
                xe = i().useRef(Ce)
            I(
                function () {
                    xe.current &&
                        !Ce &&
                        (0, be.setAllFilters)(
                            be.visibleColumns.map(function (e) {
                                return { id: e.id, value: void 0 }
                            }),
                        ),
                        (xe.current = Ce)
                },
                [Ce, be.visibleColumns, be.setAllFilters],
            )
            I(
                function () {
                    ;(0, be.toggleAllRowsExpanded)(!!b)
                },
                [be.toggleAllRowsExpanded, b],
            )
            var ke = Bi(i().useState({}), 2),
                Ie = ke[0],
                Ne = ke[1],
                Be = i().useRef(h ? be.flatRows.length : be.rows.length)
            i().useEffect(
                function () {
                    Be.current = 0
                },
                [le],
            ),
                i().useEffect(
                    function () {
                        var e = h ? be.flatRows.length : be.rows.length
                        e > Be.current && (Be.current = e)
                    },
                    [h, be.flatRows, be.rows],
                )
            var Fe = i().useRef(null),
                De = {
                    onMouseDown: function () {
                        Fe.current.classList.remove('rt-keyboard-active')
                    },
                    onKeyDown: function () {
                        Fe.current.classList.add('rt-keyboard-active')
                    },
                    onKeyUp: function (e) {
                        9 === (e.which || e.keyCode) && Fe.current.classList.add('rt-keyboard-active')
                    },
                },
                Te = i().useRef(null),
                We = Bi(i().useState(!1), 2),
                He = We[0],
                _e = We[1]
            I(function () {
                var e = function () {
                    var e = Te.current,
                        t = e.scrollHeight,
                        r = e.clientHeight,
                        n = e.scrollWidth,
                        o = e.clientWidth
                    _e(t > r || n > o)
                }
                if (window.ResizeObserver) {
                    var t = new ResizeObserver(function () {
                        e()
                    })
                    return (
                        t.observe(Te.current),
                        function () {
                            t.disconnect()
                        }
                    )
                }
                e()
            }, []),
                i().useEffect(
                    function () {
                        if (window.Shiny && window.Shiny.onInputChange && !ne) {
                            var e = Fe.current.parentElement.getAttribute('data-reactable-output')
                            if (e) {
                                var t,
                                    r = Pe.selected.map(function (e) {
                                        return e + 1
                                    }),
                                    n = Pe.page + 1,
                                    o = Pe.sorted.length > 0 ? {} : null,
                                    a = Ci(Pe.sorted)
                                try {
                                    for (a.s(); !(t = a.n()).done; ) {
                                        var i = t.value
                                        o[i.id] = i.desc ? 'desc' : 'asc'
                                    }
                                } catch (e) {
                                    a.e(e)
                                } finally {
                                    a.f()
                                }
                                var l = { page: n, pageSize: Pe.pageSize, pages: Pe.pages, sorted: o, selected: r }
                                Object.keys(l).forEach(function (t) {
                                    window.Shiny.onInputChange(''.concat(e, '__reactable__').concat(t), l[t])
                                })
                            }
                        }
                    },
                    [ne, Pe.page, Pe.pageSize, Pe.pages, Pe.sorted, Pe.selected],
                )
            var Le = k(be.pageCount)
            i().useEffect(
                function () {
                    if (window.Shiny && !ne) {
                        var e = Fe.current.parentElement.getAttribute('data-reactable-output')
                        if (e) {
                            var t = be.setRowsSelected,
                                r = be.gotoPage,
                                n = be.toggleAllRowsExpanded
                            window.Shiny.addCustomMessageHandler('__reactable__'.concat(e), function (e) {
                                if (e.jsEvals) {
                                    var o,
                                        a = Ci(e.jsEvals)
                                    try {
                                        for (a.s(); !(o = a.n()).done; ) {
                                            var i = o.value
                                            window.HTMLWidgets.evaluateStringMember(e, i)
                                        }
                                    } catch (e) {
                                        a.e(e)
                                    } finally {
                                        a.f()
                                    }
                                }
                                if (null != e.data) {
                                    var l = qa(e.data, ue)
                                    ie(l)
                                }
                                if (null != e.selected) {
                                    var u = e.selected.map(function (e) {
                                        return String(e)
                                    })
                                    t(u)
                                }
                                if (null != e.page) {
                                    var c = Math.min(Math.max(e.page, 0), Math.max(Le() - 1, 0))
                                    r(c)
                                }
                                null != e.expanded && (e.expanded ? n(!0) : n(!1)), void 0 !== e.meta && ge(e.meta)
                            })
                        }
                    }
                },
                [ne, be.setRowsSelected, be.gotoPage, be.toggleAllRowsExpanded, ue, Le, ge],
            )
            var $e = i().useRef(null)
            I(
                function () {
                    if (ee && window.crosstalk) {
                        var e = {}
                        ;(e.selection = new window.crosstalk.SelectionHandle(ee)),
                            (e.filter = new window.crosstalk.FilterHandle(ee)),
                            (e.selected = e.selection.value),
                            (e.filtered = e.filter.filteredKeys),
                            ($e.current = e)
                        var t = (Q || []).reduce(function (e, t, r) {
                                return (e[t] = r), e
                            }, {}),
                            r = be.setFilter,
                            n = be.setRowsSelected,
                            o = function () {
                                var n,
                                    o = e.selected && e.selected.length > 0 ? e.selected : null,
                                    a = e.filtered,
                                    i = (n =
                                        o || a
                                            ? o
                                                ? a
                                                    ? o.filter(function (e) {
                                                          return a.includes(e)
                                                      })
                                                    : o
                                                : a
                                            : null)
                                        ? n.map(function (e) {
                                              return t[e]
                                          })
                                        : null
                                r(te, i)
                            },
                            a = function (t) {
                                e.selected !== t && ((e.selected = t), o())
                            }
                        return (
                            e.selection.on('change', function (t) {
                                t.sender !== e.selection ? (a(t.value), (e.skipNextSelection = !0), n([])) : a(null)
                            }),
                            e.filter.on('change', function (t) {
                                var r
                                t.sender !== e.filter && ((r = t.value), e.filtered !== r && ((e.filtered = r), o()))
                            }),
                            (e.selected || e.filtered) && o(),
                            function () {
                                try {
                                    e.selection.close()
                                } catch (e) {
                                    console.error('Error closing Crosstalk selection handle:', e)
                                }
                                try {
                                    e.filter.close()
                                } catch (e) {
                                    console.error('Error closing Crosstalk filter handle:', e)
                                }
                            }
                        )
                    }
                },
                [Q, ee, te, be.setFilter, be.setRowsSelected],
            ),
                I(
                    function () {
                        $e.current && (S || ($e.current.skipNextSelection = !0))
                    },
                    [S],
                ),
                I(
                    function () {
                        if ($e.current && v) {
                            var e = $e.current
                            if (e.skipNextSelection) e.skipNextSelection = !1
                            else {
                                var t = Object.keys(he.selectedRowIds).map(function (e) {
                                    return Q[ve[e].index]
                                })
                                try {
                                    e.selection.set(t)
                                } catch (e) {
                                    console.error('Error selecting Crosstalk keys:', e)
                                }
                            }
                        }
                    },
                    [he.selectedRowIds, ve, v, Q],
                ),
                (be.state = Pe),
                (be.downloadDataCSV = function (e) {
                    var t = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : {}
                    e = e || 'data.csv'
                    var r = be.getDataCSV(t)
                    Nn(r, e)
                }),
                (be.getDataCSV = function () {
                    var e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : {}
                    e.columnIds ||
                        (e.columnIds = ue.map(function (e) {
                            return e.id
                        }))
                    var t = le.length > 0 ? Object.keys(le[0]) : []
                    e.columnIds = e.columnIds.filter(function (e) {
                        return t.includes(e)
                    })
                    var r = be.preGroupedRows.map(function (e) {
                            return e.values
                        }),
                        n = In(r, e)
                    return n
                }),
                (be.setMeta = ge)
            var Ue = be.toggleHideColumn
            ;(be.toggleHideColumn = function (e, t) {
                ;(t && Pe.hiddenColumns.includes(e)) || Ue(e, t)
            }),
                (be.setData = function (e) {
                    var t = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : {}
                    if (
                        ((t = Object.assign({ resetSelected: !0, resetExpanded: !1 }, t)),
                        'object' !== Pi(e) || null == e)
                    )
                        throw new Error('data must be an array of row objects or an object containing column arrays')
                    Array.isArray(e) || (e = qa(e, ue)),
                        ie(e),
                        t.resetSelected && be.setRowsSelected([]),
                        t.resetExpanded && be.toggleAllRowsExpanded(!1)
                })
            var Ke = i().useRef([])
            be.onStateChange = function (e) {
                if ('function' != typeof e) throw new Error('listenerFn must be a function')
                return (
                    Ke.current.push(e),
                    function () {
                        Ke.current = Ke.current.filter(function (t) {
                            return t !== e
                        })
                    }
                )
            }
            var Xe = (function (e) {
                var t = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : 0,
                    r = i().useRef({}),
                    n = k(e),
                    o = k(t)
                return i().useCallback(
                    function () {
                        for (var e = arguments.length, t = new Array(e), a = 0; a < e; a++) t[a] = arguments[a]
                        return (
                            r.current.promise ||
                                (r.current.promise = new Promise(function (e, t) {
                                    ;(r.current.resolve = e), (r.current.reject = t)
                                })),
                            r.current.timeout && clearTimeout(r.current.timeout),
                            (r.current.timeout = setTimeout(function () {
                                delete r.current.timeout
                                try {
                                    r.current.resolve(n().apply(void 0, t))
                                } catch (e) {
                                    r.current.reject(e)
                                } finally {
                                    delete r.current.promise
                                }
                            }, o())),
                            r.current.promise
                        )
                    },
                    [n, o],
                )
            })(function (e) {
                Ke.current.forEach(function (t) {
                    t(e)
                })
            }, 0)
            i().useEffect(
                function () {
                    Xe(Pe)
                },
                [Pe, Xe],
            )
            var Je = k(be)
            i().useEffect(
                function () {
                    var e = re
                    if ((e || (e = Fe.current.parentElement.getAttribute('data-reactable-output')), e))
                        return (
                            (Hi[e] = Je),
                            function () {
                                delete Hi[e]
                            }
                        )
                },
                [re, Je],
            ),
                (L = En(
                    L,
                    $n(q.style),
                    j && 'rt-outlined',
                    A && 'rt-bordered',
                    x && 'rt-borderless',
                    F && 'rt-compact',
                    D && 'rt-nowrap',
                    K && ' rt-inline',
                )),
                (V = Mi({ width: X, height: J }, V))
            var qe,
                Ze = null != he.columnResizing.isResizingColumn,
                Ye = En($n(q.tableStyle), Ze && 'rt-resizing')
            return i().createElement(
                ol,
                Gi({ ref: Fe }, De, { className: L, style: V }),
                o
                    ? i().createElement(vl, {
                          searchValue: he.globalFilter,
                          setSearch: be.setGlobalFilter,
                          className: $n(q.searchInputStyle),
                          placeholder: Z.searchPlaceholder,
                          'aria-label': Z.searchLabel,
                      })
                    : null,
                i().createElement(
                    al,
                    { ref: Te, tabIndex: He ? 0 : null, className: Ye },
                    ((qe = be.getTheadProps()),
                    i().createElement(
                        il,
                        qe,
                        be.headerGroups.map(function (e, t) {
                            var r = t < be.headerGroups.length - 1,
                                n = e.getHeaderGroupProps({ className: r ? 'rt-tr-group-header' : 'rt-tr-header' }),
                                o = n.key,
                                a = Wi(n, Si)
                            return i().createElement(
                                sl,
                                Gi({ key: o }, a),
                                e.headers.map(function (e) {
                                    var t,
                                        n =
                                            'function' == typeof (e = Mi(Mi({}, e), {}, { column: e, data: Oe })).Header
                                                ? e.Header(e, Pe)
                                                : e.render('Header'),
                                        o = {
                                            colSpan: null,
                                            ref: function (t) {
                                                return (Ee.current[e.id] = t)
                                            },
                                        }
                                    if (r) {
                                        var a = pl(q.groupHeaderStyle),
                                            l = a.className,
                                            u = a.innerClassName
                                        o = Mi(
                                            Mi({}, o),
                                            {},
                                            {
                                                'aria-colspan': e.totalVisibleHeaderCount,
                                                className: En(
                                                    e.isUngrouped ? 'rt-th-group-none' : 'rt-th-group',
                                                    e.headerClassName,
                                                    l,
                                                ),
                                                innerClassName: u,
                                                style: e.headerStyle,
                                                canResize: e.canResize,
                                            },
                                        )
                                    } else {
                                        var c = pl(q.headerStyle),
                                            s = c.className,
                                            f = c.innerClassName
                                        ;(o = Mi(
                                            Mi({}, o),
                                            {},
                                            {
                                                role: e.selectable ? 'cell' : 'columnheader',
                                                className: En(e.headerClassName, s),
                                                innerClassName: f,
                                                style: e.headerStyle,
                                                canResize: e.canResize,
                                                isResizing: e.isResizing,
                                            },
                                        )),
                                            e.canSort &&
                                                (o = Mi(
                                                    Mi({}, o),
                                                    {},
                                                    {
                                                        'aria-label': Xn(Z.sortLabel, { name: e.name }),
                                                        canSort: e.canSort,
                                                        sortDescFirst: e.sortDescFirst,
                                                        isSorted: e.isSorted,
                                                        isSortedDesc: e.isSortedDesc,
                                                        toggleSortBy: e.toggleSortBy,
                                                    },
                                                ))
                                    }
                                    if (e.canResize) {
                                        var d = e.getResizerProps(),
                                            p = d.onMouseDown,
                                            g = d.onTouchStart
                                        t = i().createElement(gl, {
                                            onMouseDown: function (e) {
                                                p(e), e.preventDefault()
                                            },
                                            onTouchStart: g,
                                            onClick: function (e) {
                                                e.stopPropagation()
                                            },
                                        })
                                    }
                                    if (e.selectable && 'multiple' === v && be.rows.length > 0) {
                                        var y = function () {
                                            return be.toggleAllRowsSelected()
                                        }
                                        ;(o = Mi(
                                            Mi({}, o),
                                            {},
                                            { onClick: y, className: En(o.className, 'rt-td-select') },
                                        )),
                                            (n = i().createElement(Sl, {
                                                type: 'checkbox',
                                                checked: be.isAllRowsSelected,
                                                onChange: y,
                                                'aria-label': Z.selectAllRowsLabel,
                                            }))
                                    }
                                    var m = e.getHeaderProps(o),
                                        h = m.key,
                                        b = Wi(m, Oi)
                                    return i().createElement(fl, Gi({ key: h }, b), n, t)
                                }),
                            )
                        }),
                        Ce
                            ? i().createElement(
                                  sl,
                                  { className: En('rt-tr-filters', $n(q.rowStyle)) },
                                  be.visibleColumns.map(function (e) {
                                      var t, r
                                      e.filterable &&
                                          (null != e.filterInput
                                              ? ((r =
                                                    'function' == typeof e.filterInput
                                                        ? e.filterInput(e, Pe)
                                                        : (0, tr.hydrate)(
                                                              { Fragment: a.Fragment, WidgetContainer: po },
                                                              e.filterInput,
                                                          )),
                                                i().isValidElement(r)
                                                    ? (t = r)
                                                    : e.html && (t = i().createElement(Qa, { html: r })))
                                              : (t = i().createElement(bl, {
                                                    filterValue: e.filterValue,
                                                    setFilter: e.setFilter,
                                                    className: $n(q.filterInputStyle),
                                                    placeholder: Z.filterPlaceholder,
                                                    'aria-label': Xn(Z.filterLabel, { name: e.name }),
                                                })))
                                      var n = pl(q.filterCellStyle),
                                          o = n.className,
                                          l = n.innerClassName,
                                          u = {
                                              role: 'cell',
                                              colSpan: null,
                                              className: En('rt-td-filter', e.headerClassName, o),
                                              innerClassName: l,
                                              style: e.headerStyle,
                                          },
                                          c = e.getHeaderProps(u),
                                          s = c.key,
                                          f = Wi(c, Ri)
                                      return i().createElement(dl, Gi({ key: s }, f), t)
                                  }),
                              )
                            : null,
                    )),
                    (function () {
                        var e,
                            t = be.visibleColumns.some(function (e) {
                                return e.sticky
                            }),
                            r = t ? 'rt-tr-highlight-sticky' : 'rt-tr-highlight',
                            n = t ? 'rt-tr-striped-sticky' : 'rt-tr-striped',
                            o = be.page.map(function (e, t) {
                                be.prepareRow(e)
                                var o,
                                    l = function (t) {
                                        null == t && (t = !e.isSelected),
                                            'single' === v && be.setRowsSelected([]),
                                            e.toggleRowSelected(t)
                                    },
                                    u = Mi(
                                        Mi({}, e),
                                        {},
                                        {
                                            toggleRowSelected: l,
                                            viewIndex: t,
                                            row: e.values,
                                            subRows: kn(e.subRows),
                                            aggregated: e.isGrouped,
                                            expanded: e.isExpanded,
                                            level: e.depth,
                                            selected: e.isSelected,
                                            page: he.pageIndex,
                                        },
                                    ),
                                    c = {
                                        className: En(
                                            G && (t % 2 ? null : n),
                                            z && r,
                                            e.isSelected && 'rt-tr-selected',
                                            $n(q.rowStyle),
                                        ),
                                    }
                                $ &&
                                    ((o = 'function' == typeof $ ? $(u, Pe) : Array.isArray($) ? $[u.index] : $),
                                    (c.className = En(c.className, o))),
                                    U &&
                                        ('function' == typeof U
                                            ? (c.style = U(u, Pe))
                                            : Array.isArray(U)
                                            ? (c.style = U[u.index])
                                            : (c.style = U))
                                var s,
                                    f = (function (e, t) {
                                        if (!e.isExpanded || e.isGrouped) return null
                                        var r,
                                            n = Ie[e.id]
                                        if (
                                            !(r =
                                                null != n
                                                    ? be.visibleColumns.find(function (e) {
                                                          return e.id === n
                                                      })
                                                    : be.visibleColumns.find(function (e) {
                                                          return e.details
                                                      }))
                                        )
                                            return null
                                        var o = r,
                                            l = o.details,
                                            u = o.html,
                                            c = {}
                                        if ('function' == typeof l) {
                                            var s = l(e, t)
                                            u && (c.html = s), (c.children = s)
                                        } else if (Array.isArray(l)) {
                                            var f = l[e.index]
                                            if (null == f) return null
                                            u && (c.html = f),
                                                (c.children = (0, tr.hydrate)(
                                                    { Reactable: nl, Fragment: a.Fragment, WidgetContainer: po },
                                                    f,
                                                ))
                                        }
                                        return i().createElement(
                                            ml,
                                            Gi({ key: ''.concat(r.id, '_').concat(e.index) }, c),
                                        )
                                    })(u, Pe)
                                if (e.isExpanded)
                                    if (null != Ie[e.id]) s = Ie[e.id]
                                    else {
                                        var d = be.visibleColumns.find(function (e) {
                                            return e.details
                                        })
                                        s = d ? d.id : null
                                    }
                                var p = e.getRowProps(c)
                                return i().createElement(
                                    cl,
                                    { key: ''.concat(e.depth, '_').concat(t), className: $n(q.rowGroupStyle) },
                                    i().createElement(
                                        sl,
                                        Gi({}, p, { key: void 0 }),
                                        e.cells.map(function (t, r) {
                                            var n = t.column,
                                                o = n.getProps ? n.getProps(u, n, Pe) : {},
                                                a = pl(q.cellStyle),
                                                c = a.className,
                                                f = a.innerClassName
                                            o = Mi(
                                                Mi({}, o),
                                                {},
                                                {
                                                    className: En(o.className, c),
                                                    innerClassName: f,
                                                    role: n.rowHeader ? 'rowheader' : 'cell',
                                                },
                                            )
                                            var d,
                                                p,
                                                g,
                                                y = Mi(Mi({}, t), {}, { column: n, filterValue: n.filterValue }, u)
                                            if (
                                                ((d = t.isGrouped
                                                    ? n.Grouped
                                                        ? n.Grouped(y, Pe)
                                                        : y.value
                                                    : t.isAggregated
                                                    ? n.Aggregated
                                                        ? n.Aggregated(y, Pe)
                                                        : t.render('Aggregated')
                                                    : t.isPlaceholder
                                                    ? ''
                                                    : n.Cell
                                                    ? n.Cell(y, Pe)
                                                    : t.render('Cell')),
                                                n.details &&
                                                    !e.isGrouped &&
                                                    ((Array.isArray(n.details) && null == n.details[e.index]) ||
                                                        (p = !0)),
                                                p)
                                            ) {
                                                var m = e.isExpanded && s === n.id
                                                ;(o = Mi(
                                                    Mi({}, o),
                                                    {},
                                                    {
                                                        onClick: function () {
                                                            if (m) {
                                                                e.toggleRowExpanded(!1)
                                                                var t = Mi({}, Ie)
                                                                delete t[e.id], Ne(t)
                                                            } else {
                                                                e.toggleRowExpanded(!0)
                                                                var r = Mi(Mi({}, Ie), {}, Ti({}, e.id, n.id))
                                                                Ne(r)
                                                            }
                                                        },
                                                        className: En(o.className, 'rt-td-expandable'),
                                                    },
                                                )),
                                                    d === Ka &&
                                                        (o.style = Mi(
                                                            { textOverflow: 'clip', userSelect: 'none' },
                                                            o.style,
                                                        ))
                                                var h = {
                                                    isExpanded: m,
                                                    className: $n(q.expanderStyle),
                                                    'aria-label': Z.detailsExpandLabel,
                                                }
                                                g = i().createElement(hl, h)
                                            } else if (t.isGrouped) {
                                                var b = e.isExpanded
                                                o = Mi(
                                                    Mi({}, o),
                                                    {},
                                                    {
                                                        onClick: function () {
                                                            return e.toggleRowExpanded()
                                                        },
                                                        className: En(o.className, 'rt-td-expandable'),
                                                    },
                                                )
                                                var w = {
                                                    isExpanded: b,
                                                    className: $n(q.expanderStyle),
                                                    'aria-label': Z.groupExpandLabel,
                                                }
                                                g = i().createElement(hl, w)
                                            } else
                                                t.column.isGrouped &&
                                                    e.canExpand &&
                                                    (o = Mi(
                                                        Mi({}, o),
                                                        {},
                                                        {
                                                            onClick: function () {
                                                                return e.toggleRowExpanded()
                                                            },
                                                            className: En(o.className, 'rt-td-expandable'),
                                                        },
                                                    ))
                                            var S,
                                                O = 'multiple' === v || ('single' === v && !t.isAggregated)
                                            n.selectable &&
                                                O &&
                                                ((o = Mi(
                                                    Mi({}, o),
                                                    {},
                                                    {
                                                        onClick: function () {
                                                            return l()
                                                        },
                                                        className: En(o.className, 'rt-td-select'),
                                                    },
                                                )),
                                                (S = t.isAggregated ? Z.selectAllSubRowsLabel : Z.selectRowLabel),
                                                (d = i().createElement(Sl, {
                                                    type: 'multiple' === v ? 'checkbox' : 'radio',
                                                    checked: e.isSelected,
                                                    onChange: function () {
                                                        return l()
                                                    },
                                                    'aria-label': S,
                                                }))),
                                                R &&
                                                    !o.onClick &&
                                                    ('expand' === R
                                                        ? (o.onClick = function () {
                                                              return e.toggleRowExpanded()
                                                          })
                                                        : 'select' === R && O
                                                        ? (o.onClick = function () {
                                                              return l()
                                                          })
                                                        : 'function' == typeof R &&
                                                          (o.onClick = function () {
                                                              return R(u, n, Pe)
                                                          }))
                                            var j = t.getCellProps(o)
                                            return i().createElement(
                                                dl,
                                                Gi({}, j, { key: ''.concat(r, '_').concat(n.id) }),
                                                g,
                                                d,
                                            )
                                        }),
                                    ),
                                    f,
                                )
                            })
                        m = m ? Math.max(m, 1) : 1
                        var l = Math.max(m - be.page.length, 0)
                        l > 0 &&
                            (e = Ei(Array(l)).map(function (e, t) {
                                var r,
                                    n = { className: En('rt-tr-pad', $n(q.rowStyle)) }
                                return (
                                    $ &&
                                        ('function' == typeof $ ? (r = $(void 0, Pe)) : Array.isArray($) || (r = $),
                                        (n.className = En(n.className, r))),
                                    U &&
                                        ('function' == typeof U
                                            ? (n.style = U(void 0, Pe))
                                            : Array.isArray(U) || (n.style = U)),
                                    i().createElement(
                                        cl,
                                        { key: t, className: $n(q.rowGroupStyle), 'aria-hidden': !0 },
                                        i().createElement(
                                            sl,
                                            n,
                                            be.visibleColumns.map(function (e) {
                                                var r = pl(q.cellStyle),
                                                    n = r.className,
                                                    o = r.innerClassName,
                                                    a = { className: n },
                                                    l = e.getFooterProps(a),
                                                    u = l.className,
                                                    c = l.style
                                                return i().createElement(
                                                    dl,
                                                    {
                                                        key: ''.concat(t, '_').concat(e.id),
                                                        className: u,
                                                        innerClassName: o,
                                                        style: c,
                                                    },
                                                    ' ',
                                                )
                                            }),
                                        ),
                                    )
                                )
                            }))
                        var u,
                            c = $n(q.tableBodyStyle)
                        0 === be.rows.length
                            ? ((u = i().createElement(wl, null, Z.noData)), (c = En('rt-tbody-no-data', c)))
                            : (u = i().createElement(wl, null))
                        var s = be.getTableBodyProps({ className: c })
                        return i().createElement(ll, s, o, e, u)
                    })(),
                    (function () {
                        var e = be.visibleColumns.some(function (e) {
                            return null != e.footer
                        })
                        if (!e) return null
                        var t = be.getTfootProps()
                        return i().createElement(
                            ul,
                            t,
                            i().createElement(
                                sl,
                                null,
                                be.visibleColumns.map(function (e) {
                                    var t =
                                            'function' == typeof (e = Mi(Mi({}, e), {}, { column: e, data: Oe })).Footer
                                                ? e.Footer(e, Pe)
                                                : e.render('Footer'),
                                        r = pl(q.footerStyle),
                                        n = r.className,
                                        o = r.innerClassName,
                                        a = {
                                            className: En('rt-td-footer', e.footerClassName, n),
                                            innerClassName: o,
                                            style: e.footerStyle,
                                            role: e.rowHeader ? 'rowheader' : 'cell',
                                            colSpan: null,
                                        },
                                        l = e.getFooterProps(a),
                                        u = l.key,
                                        c = Wi(l, ji)
                                    return i().createElement(dl, Gi({ key: u }, c), t)
                                }),
                            ),
                        )
                    })(),
                ),
                (function () {
                    if (!1 === f) return null
                    if (!c && null == f) return null
                    if (c && null == f) {
                        var e = d ? Math.min.apply(Math, [he.pageSize].concat(Ei(y || []))) : he.pageSize
                        if (Be.current <= e) return null
                    }
                    return i().createElement(ao, {
                        paginationType: s,
                        pageSizeOptions: y,
                        showPageInfo: p,
                        showPageSizeOptions: d,
                        page: he.pageIndex,
                        pages: be.pageCount,
                        pageSize: he.pageSize,
                        pageRowCount: be.pageRowCount,
                        canNext: be.canNextPage,
                        canPrevious: be.canPreviousPage,
                        onPageChange: be.gotoPage,
                        onPageSizeChange: be.setPageSize,
                        rowCount: be.rows.length,
                        theme: q,
                        language: Z,
                    })
                })(),
            )
        }
        ;(nl.defaultProps = {
            sortable: !0,
            pagination: !0,
            defaultPageSize: 10,
            paginationType: 'numbers',
            pageSizeOptions: [10, 25, 50, 100],
            showPageInfo: !0,
            minRows: 1,
            showSortIcon: !0,
            crosstalkId: '__crosstalk__',
        }),
            (yl = { Reactable: nl }),
            window.HTMLWidgets.widget({
                name: 'reactable',
                type: 'output',
                factory: function (e) {
                    return {
                        renderValue: function (t) {
                            e.hasAttribute('data-react-ssr')
                                ? u().hydrate(s(yl, t.tag), e)
                                : u().render(s(yl, t.tag), e)
                        },
                        resize: function () {},
                    }
                },
            })
    })()
    var r = (Reactable = 'undefined' == typeof Reactable ? {} : Reactable)
    for (var n in t) r[n] = t[n]
    t.__esModule && Object.defineProperty(r, '__esModule', { value: !0 })
})()
//# sourceMappingURL=reactable.js.map
